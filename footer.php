<footer class="gap-top bounceInUp animated">
    <div class="box square charcoal">
        <div class="container padded">
            <div class="row">
                <div class="one small-tablet half padded">
                    <h5 class="green">Mapa do site</h5>
                    <ul class="unstyled">
                        <li>
                            <a href="../home" title="Home">Home</a>
                        </li>
                        <li>
                            <a href="../evolucao-dos-acidentes-de-transito" title="Evolução dos acidentes de trânsito 1980/2011">Evolução dos acidentes de trânsito</a>
                        </li>
                        <li>
                            <a href="../evolucao-por-categoria-de-acidente" title="Evolução por categoria de acidente">Evolução por categoria de acidente</a>
                        </li>
                        <li>
                            <a href="../frota-veicular-e-mortalidade-no-transito" title="Frota veicular e mortalidade no trânsito">Frota veicular e mortalidade no trânsito</a>
                        </li>
                        <li>
                            <a href="../internacoes-hospitalares-por-acidentes-de-transito" title="Internações hospitalares por acidentes de trânsito">Internações hospitalares por acidentes de trânsito</a>
                        </li>
                        <li>
                            <a href="../mortalidade-no-transito-das-capitais" title="Mortalidade no trânsito das capitais">Mortalidade no trânsito das capitais</a>
                        </li>
                        <li>
                            <a href="../contato" title="Contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="box square black">
        <div class="container padded align-center">
            <div class="row">
                <h6>Grupo Cícero | Raphael | Rodrigo</h6>
                <p>&copy 2014 Todos os direitos reservados.</p>
            </div>
        </div>
        <div class="align-right github">
            <a href="https://github.com/cicerocasj/trabalho-ihc" title="Trabalho IHC - Github" ><i class="icon-github icon-2x white"></i></a>
        </div>
    </div>
</footer>
</section>

<!-- scripts -->
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/groundwork.all.js"></script>
<!--<script type="text/javascript" src="../js/scripts.js"></script>-->

<!-- Modernizr -->
<script src="../js/modernizr-2.6.2.min.js"></script>
<!-- jQuery-->
<script type="text/javascript" src="../js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="../js/jcarousel.responsive.js"></script>

<script>
    $(document).ready(function(){
        $("#sendbutton").click(function(){
            $("#ajaxform").submit(function(e) {
                var postData = $(this).serializeArray();
                var formURL = $(this).attr("action");
                $.ajax(
                    {
                        url : formURL,
                        type: "POST",
                        data : postData,
                        dataType: 'json',
                        success:function(data, textStatus, jqXHR) {
                            $('#email').val("");
                            $('#message').val("");
                            var status = "<span style='color: ";
                            if (data['status']) {
                                status = status + "green;'>Mensagem salva";
                            } else {
                                status = status + "red;'>Erro ao salvar";
                            }
                            status = status + "</span>"
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
                        }
                    });
                e.preventDefault(); //STOP default action
                e.unbind(); //unbind. to stop multiple form submit.
            });

            //$("#ajaxform").submit();
        });
        /*    $.ajax({
                type: "POST",
                url: document.URL + "comentario.php",
                data: {},
                success: function(response) {
                    alert("foi o ajax");
                },
                error: function(e) {
                    alert('deu erro no ajax');
                }
            });
        */
    })
</script>

</body>
</html>
