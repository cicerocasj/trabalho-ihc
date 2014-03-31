<?php
$include_css = '<link rel="stylesheet" href="../css/grafico_noticias/grafico_noticia.css"/>';
include "../header.php";
?>
<div class="row">
    <article class="four fifths">
        <div class="row">
            <div class="four fourth one-up-small-tablet one-up-mobile padded bounceInDown animated">
                <div class="box white square white">
                    <h4 title="Frota veicular e mortalidade no trânsito" data-compression="7" data-max="20" class="align-center zero">
                        Frota veicular e mortalidade no trânsito
                    </h4>
                    <script type="text/javascript" src="../js/graficos_noticias/amcharts.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/serial.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/dark.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/grafico_noticia4.js"></script>
                    <div id="chartdiv"></div>
                    <p>
                        Em geral, para comparar dados relativos a locais ou épocas diferentes, são utilizadas taxas que tomam como base a população de cada local ou período. Um indicador mais acurado para comparar acidentes de trânsito seria o tamanho da frota de veículos em circulação. Obviamente, um país cuja população possui poucos automóveis vai ter taxas de acidentes bem inferiores aos de outro país com grande número de carros. Isso não acontece porque os primeiros sejam melhores condutores, ou as ruas tenham melhor traçado ou sinalização, e sim pelo número de veículos em circulação. Porém são escassos os países que possuem dados discriminados de frota veicular. No Brasil, o Denatran, no seu site oficial, fornece especificações da frota registrada nacionalmente pela instituição, mas só a partir de 1998, quando já iniciara o que poderíamos denominar o boom das motocicletas.
                        Segundo o próprio Denatran, em 1970 a motocicleta era um item de baixa representatividade: num parque total de 2,6 milhões de veículos, só havia registradas 62.459 motocicletas: 2,4% do parque total.
                        Na virada do século, no ano 2000, temos 4,0 milhões de motocicletas registradas, o que já representa 13,6% do parque veicular. Para 2011, o número pula para 18,4 milhões, representando 26,1% do total nacional de veículos registrados pelo Denatran
                    </p>
                </div>
            </div>
        </div>
    </article>
    <?php
    include "../aside.php";
    ?>
</div>
<?php
include "../footer.php";
?>