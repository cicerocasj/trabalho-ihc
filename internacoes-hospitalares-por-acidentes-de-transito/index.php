<?php
$include_css = '<link rel="stylesheet" href="../css/grafico_noticias/grafico_noticia.css"/>';
include "../header.php";
?>
<div class="row">
    <article class="four fifths">
        <div class="row">
            <div class="four fourth one-up-small-tablet one-up-mobile padded bounceInDown animated">
                <div class="box white square white">
                    <h4 title="Internações hospitalares por acidentes de trânsito" data-compression="7" data-max="20" class="align-center zero">
                        Internações hospitalares por acidentes de trânsito
                    </h4>
                    <script type="text/javascript" src="../js/graficos_noticias/amcharts.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/serial.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/dark.js"></script>
                    <script type="text/javascript" src="../js/graficos_noticias/grafico_noticia2.js"></script>
                    <div id="chartdiv"></div>
                    <p>
                        Nossa fonte principal para o tratamento das hospitalizações causadas pelos acidentes de trânsito é o Sistema de Informações Hospitalares (SIH) do MS. Desenvolvido na década de 1970, visando controlar os pagamentos dos serviços prestados pelos hospitais contratados.
                        Assim, conservando sua finalidade de atender o processo de remuneração das internações hospitalares financiadas pelo SUS, atualmente possui uma gigantesca base de dados, abrangendo as mais diversas atividades do setor, seja da rede pública, seja da privada ou filantrópica conveniada com o SUS.
                        Contudo, algumas limitações derivadas da utilização do SIH para nossos propósitos devem ser ainda colocadas:
                        <ul>
                            <li>Trata-se de internações hospitalares, que restringe o universo de vítimas aos casos que demandam internação.</li>
                            <li>O Sistema só registra as internações realizadas na rede pública ou conveniada com o SUS. Diversas estimativas permitem afirmar que cobre aproximadamente 80% do total das internações.</li>
                            <li>Precariedades decorrentes de problemas no preenchimento das fichas de registro, dentre eles na tipificação das vítimas (tipo de acidentado), que nos origina problemas metodológicos.</li>
                            <li>Em primeiro lugar, constata-se que os casos não tipificados caíram ao longo do tempo: passam de 17,7% do total de atendimentos em 1998 para 7,7% em 2012. De não ajustar os quantitativos, pode-se confundir a melhoria no registro com crescimento no número de internações.</li>
                            <li>Em segundo lugar, essa situação se verifica em poucos estados. De não ajustar os valores para essas Unidades, apareceriam com índices bem menores.</li>
                            <li>Por esse motivo, optou-se por realizar um ajuste nos dados, distribuindo proporcionalmente os não especificados de acordo com a proporcionalidade existente nos dados especificados.</li>
                        </ul>
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