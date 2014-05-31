$(document).ready(function(){

    // GET ALL MESSAGES
    function getMessages() {
        var formURL = $("#ajaxform").attr("action");
        $.getJSON(formURL+"?noticiaId="+$("#noticiaId").val(), function(response) {
            var results = "";
            $.each(response['results'], function(key, value) {
                results = results + "<p>Email: " + value['email'] + "</p>";
                results = results + "<p>Mensagem: " + value['message'] + "</p>";
                results = results + "<p>Data da mensagem: " + value['data'] + "</p>";
                results = results + "<br><br><br>";
            });
            $('#output-comments').html(results);
        });
    }

    $("#sendbutton").click(function(){
        $("#ajaxform").submit(function(e) {
            var postData = $(this).serializeArray();
            var formURL = $(this).attr("action");
            $.ajax({
                url : formURL,
                type: "POST",
                data : postData,
                dataType: 'json',
                success:function(data, textStatus, jqXHR) {
                    alert(data['status']);
                    $('#email').val("");
                    $('#message').val("");
                    var status = "<span style='color: ";
                    if (data['status']) {
                        status = status + "green;'>Mensagem salva";
                    } else {
                        status = status + "red;'>Erro ao salvar";
                    }
                    status = status + "</span>";
                    var results = "";
                    $.each(data['results'], function(key, value) {
                        results = results + "<p>Email: " + value['email'] + "</p>";
                        results = results + "<p>Mensagem: " + value['message'] + "</p>";
                        results = results + "<p>Data da mensagem: " + value['data'] + "</p>";
                        results = results + "<br><br><br>";
                    });
                    $('#output-comments').html(status+results);
                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    alert('num foi ta?');
                    console.error(jqXHR);
                }
            });
            return false;
            e.preventDefault(); //STOP default action
            e.unbind(); //unbind. to stop multiple form submit.
        });
    });

    getMessages();
})