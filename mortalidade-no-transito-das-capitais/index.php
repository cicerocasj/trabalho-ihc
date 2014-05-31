<?php
$include_css = '<link rel="stylesheet" href="../css/grafico_noticias/grafico_noticia.css"/>';
include "../header.php";
?>
<div class="row">
    <article class="four fifths">
        <div class="row">
            <div class="four fourth one-up-small-tablet one-up-mobile padded bounceInDown animated">
                <div class="box white square white">
                    <h4 title="Mortalidade no trânsito das capitais" data-compression="7" data-max="20" class="align-center zero">
                        Mortalidade no trânsito das capitais
                    </h4>
                    <script type="text/javascript" src="../js/graficos_noticias/amcharts.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/serial.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/dark.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/grafico_noticia6.js"></script>
                    <div id="chartdiv"></div>
                    <p>
                        Apesar do aumento da densidade e do volume do tráfego, a evolução decenal das mortes no trânsito das capitais foi bem menor que a registrada nas UF como um todo, onde o crescimento na década foi de 41,7% e as taxas aumentaram 27%. Já nas capitais, o número de óbitos em acidentes aumentou 9,2% e as taxas até caíram levemente: -2,3%. Esse diferencial pode ser atribuído à concentração da fiscalização, campanhas educativas, investimentos etc. nas capitais dos estados.
                        Mais da metade das capitais – 14 das 27 – teve quedas em suas taxas, com destaque para Belém, Rio de Janeiro e Natal. De forma negativa, destacam-se Porto Velho e Salvador, onde as taxas mais que duplicaram no período.
                        O gráfico 6.1 permite visualizar a evolução das taxas das capitais em relação com as do país como um todo. Vemos que as taxas do país tiveram um crescimento quase constante a partir do ano 2001, enquanto as taxas das capitais praticamente estagnaram entre 2001 e 2006, para iniciar, a partir desse ponto, um processo de reversão que dura até 2009. Inexplicavelmente, observa-se um forte aumento em 2010.
                        As maiores taxas do país em 2011 podem ser encontradas em Porto Velho, Teresina e Aracajú. Já as menores em Belém, Rio de Janeiro e São Paulo.
                    </p>
                </div>
            </div>
        </div>
    </article>

    <form action="../comentario.php" method="post">
        <input type="text" id="urlinvisivel" name="urlinvisivel" value=" " style="display: none;">
        <input type="text" id="noticiaId" name="noticiaId" value="5" style="display: none;">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email" data-mini="true" />
        <label for="message">Mensagem:</label>
        <textarea name="message" id="message"></textarea>
        <input type="submit" value="Enviar">
    </form>
    <script>
        document.getElementById('urlinvisivel').value = document.URL;
    </script>


    <?php
    include "../aside.php";
    ?>
</div>
<?php
include "../footer.php";
?>
