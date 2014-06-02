$(document).ready(function(){

    // GET ALL MESSAGES
    function getMessages() {
        var formURL = $("#ajaxform").attr("action");
        $.getJSON(formURL+"?noticiaId="+$("#noticiaId").val(), function(response) {
            var results = "";
            $.each(response['results'], function(key, value) {
                results = results + "<li class='ui-block-a'>";
                results = results + "<h4>Email: " + value['email'] + "</h4>";
                results = results + "<p>Mensagem: " + value['message'] + "</p>";
                results = results + "<p>" + value['data'] + "</p>";
                results = results + "</li>";
            });
            $('#output-comments ul').html(results);
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
                    $('#email').val("");
                    $('#message').val("");
                    var status = "<span id='result_message' style='color: ";
                    if (data['status']) {
                        status = status + "green;'>Mensagem salva";
                    } else {
                        status = status + "red;'>Erro ao salvar";
                    }
                    status = status + "</span>";
                    var results = "";
                    $.each(data['results'], function(key, value) {
                        results = results + "<li class='ui-block-a'>";
                        results = results + "<h4>Email: " + value['email'] + "</h4>";
                        results = results + "<p>Mensagem: " + value['message'] + "</p>";
                        results = results + "<p>" + value['data'] + "</p>";
                        results = results + "</li>";
                    });
                    $('#text-result').html(status);
                    $('#output-comments ul').html(results);
                    document.getElementById('result_message').setAttribute('class','');

                },
                error: function(jqXHR, textStatus, errorThrown)
                {
                    console.error(jqXHR);
                }
            });
            return false;
            e.preventDefault(); //STOP default action
            e.unbind(); //unbind. to stop multiple form submit.
        });
    });

    getMessages();
    //$("#sendbutton").click();
    setTimeout(function(){
//        alert('aaaaaaaaaaa');
        document.getElementById('result_message').setAttribute('class','closed');
    }, 2000);

    if (typeof String.prototype.startsWith != 'function') {
        // see below for better implementation!
        String.prototype.startsWith = function (str){
            return this.indexOf(str) == 0;
        };
    }
    //var alert_swipe = $("#alert-swipe");

    function setCookieSwipe(object) {
        document.cookie = "alert_swipe=disabled";
        //$("#alert-swipe").hide();
    }

    $("#alert-swipe").swipeleft(function(){
        $("#alert-swipe").addClass("animated bounceOutLeft");
        setCookieSwipe($(this));
    });

    $("#alert-swipe").swiperight(function(){
        $("#alert-swipe").addClass("animated bounceOutRight");
        setCookieSwipe($(this));
    });
    /*alert_swipe.click(function(){
        document.cookie = "alert_swipe=disabled";
        alert_swipe.hide();
    });*/
    if(document.cookie.startsWith("alert_swipe=disabled")){
        $("#alert-swipe").hide();
    }
});