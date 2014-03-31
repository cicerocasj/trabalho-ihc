<?php
$include_css = '<link rel="stylesheet" href="../css/grafico_noticias/grafico_noticia.css"/>';
include "../header.php";
?>
<div class="row">
    <article class="four fifths">
        <div class="row">
            <div class="four fourth one-up-small-tablet one-up-mobile padded bounceInDown animated">
                <div class="box white square white">
                    <h4 data-compression="7" data-max="20" class="align-center zero" title="Evolução dos acidentes de trânsito 1980/2011">
                        Evolução dos acidentes de trânsito 1980/2011
                    </h4>
                    <script type="text/javascript" src="../js/graficos_noticias/amcharts.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/serial.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/dark.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/grafico_noticia2.js"></script>
                    <div id="chartdiv"></div>
                    <p>
                        Entre 1980 e 2011, foram registrados perto de um milhão de óbitos nos diversos tipos de acidentes de trânsito acontecidos no país. O SIM/MS contabilizou, nesse período, exatas 980.838 mortes em acidentes nas vias públicas.
                        Nos anos finais da década de 90, registra-se uma inflexão na evolução da mortalidade por acidentes de trânsito – ver tabelas e gráficos a seguir – que permite caracterizar três grandes períodos. Até 1997, o SIM registra fortes aumentos no número de mortes, principalmente entre 1993 e 1997. A partir do novo Código de Trânsito, promulgado em setembro de 1997, e até o ano 2000, os números caem com o rigor do novo estatuto e as campanhas que gerou. Mas, a partir do ano 2000, é possível observar novos e marcados incrementos, da ordem de 4,8% ao ano, fazendo com que os quantitativos retornassem, já em 2005, ao patamar de 1997, para continuar depois crescendo de forma contínua e sistemática.
                        Já em 2010, o SIM registra perto de 43 mil mortes no trânsito, superado a seguir com os números de 2011. E o mais preocupante do caso é que a tendência evidente na série a partir do ano 2000 é de continuar crescendo com um ritmo elevado: 3,7% ao ano em média.
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