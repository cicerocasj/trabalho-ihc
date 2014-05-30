<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Mortalidade no Trânsito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="jquery.mobile-1.3.1.min.css" />
    <link rel="stylesheet" href="../css/styles.css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div data-role="page" id="home" data-theme="c">
    <div data-role="panel" id="navpanel-left" data-theme="c"
         data-display="overlay" data-position="left">
        <div data-role="controlgroup" data-corners="false">
            <a href="#" data-role="button">Home</a>
            <a href="#" data-role="button">Noticias</a>
            <a href="#" data-role="button">Contato</a>
        </div>
    </div>
    <div data-role="panel" id="navpanel" data-theme="c"
         data-display="overlay" data-position="right">
        <div data-role="controlgroup" data-corners="false">
            <a href="#" data-role="button">Evolução dos acidentes de trânsito</a>
            <a href="#" data-role="button">Evolução por categoria de acidente</a>
            <a href="#" data-role="button">Frota veicular e mortalidade no trânsito</a>
            <a href="#" data-role="button">Internações hospitalares por acidentes de transito</a>
            <a href="#" data-role="button">Mortalidade no trânsito das capitais</a>
        </div>
    </div>
    <div id="header" data-role="header" data-theme="a">
        <a id="bars-button-left" data-icon="bars"  class="ui-btn-left menu-mobile" style="margin-top:10px;" href="#navpanel-left">Menu</a>
        <a id="bars-button" data-icon="bars"  class="ui-btn-right menu-mobile" style="margin-top:10px;" href="#navpanel">Ultimas noticias</a>
        <div class="menu-tablet">
            <a href="#">Home</a>
            <a href="#">Noticias</a>
            <a href="#">Contato</a>
        </div>
    </div>
    <div id="index" data-role="content">
        <div class="ui-grid-b my-breakpoint">
            <div class="ui-block-a">
                <h4 data-compression="7" data-max="20" class="align-center zero" title="Evolução dos acidentes de trânsito 1980/2011">
                    <a title="Evolução dos acidentes de trânsito 1980/2011" class="responsiveText-wrapper" href="../evolucao-dos-acidentes-de-transito/">Evolução dos acidentes de trânsito 1980/2011</a>
                </h4>
                <p>
                    <img src="../images/evolucao-dos-acidentes-de-transito.png" alt="Evolução dos acidentes de trânsito 1980/2011" title="Evolução dos acidentes de trânsito 1980/2011">
                    Entre 1980 e 2011, foram registrados perto de um milhão de óbitos nos diversos tipos de acidentes de trânsito acontecidos no país. O SIM/MS contabilizou, nesse período, exatas 980.838 mortes em acidentes nas vias públicas. Nos anos finais da década de 90, registra-se uma inflexão na evolução da mortalidade por acidentes de trânsito – ver tabelas e gráficos a seguir – que permite caracterizar três grandes períodos. Até 1997, o SIM registra fortes aumentos no número de mortes, principalmente entre 1993 e 1997...
                </p>
            </div>
            <div class="ui-block-b">
                <h4 data-compression="7" data-max="20" class="align-center zero" title="Evolução por categoria de acidente">
                    <a class="responsiveText-wrapper" href="../evolucao-por-categoria-de-acidente" title="Evolução por categoria de acidente">Evolução por categoria de acidente</a>
                </h4>

                <p><img src="../images/evolucao-por-categoria-de-acidente.png" title="Evolução por categoria de acidente" alt="Evolução por categoria de acidente">
                    Passado os efeitos imediatos do novo código de trânsito de 1997, em virtude de mobilizações, campanhas e atividades educativas nas ruas, já no ano 2000 observamos a retomada da mortalidade com preocupantes aumentos nos números e nas taxas. Assim, nos 11 anos entre 2000 e 2011, o número de mortes nas vias públicas passou de 28.995 para 43.256, o que representa um aumento de 49,2%. As taxas, considerando o aumento da população, também cresceram 31,7% entre 2000 e 2011...
                </p>
            </div>
            <div class="ui-block-a"><h4 data-compression="7" data-max="20" class="align-center zero" title="Frota veicular e mortalidade no trânsito">
                    <a class="responsiveText-wrapper" href="../frota-veicular-e-mortalidade-no-transito" title="Frota veicular e mortalidade no trânsito">Frota veicular e mortalidade no trânsito</a>
                </h4>

                <p><img src="../images/frota-veicular-e-mortalidade-no-transito.png" title="Frota veicular e mortalidade no trânsito" alt="Frota veicular e mortalidade no trânsito">
                    Em geral, para comparar dados relativos a locais ou épocas diferentes, são utilizadas taxas que tomam como base a população de cada local ou período. Um indicador mais acurado para comparar acidentes de trânsito seria o tamanho da frota de veículos em circulação. Obviamente, um país cuja população possui poucos automóveis vai ter taxas de acidentes bem inferiores aos de outro país com grande número de carros. Isso não acontece porque os primeiros sejam melhores condutores, ou as ruas tenham...
                </p>
            </div>
            <div class="ui-block-b">
                <h4 data-compression="7" data-max="20" class="align-center zero" title="Internações hospitalares por acidentes de trânsito">
                    <a class="responsiveText-wrapper" href="../internacoes-hospitalares-por-acidentes-de-transito" title="Internações hospitalares por acidentes de trânsito">Internações hospitalares por acidentes de trânsito</a>
                </h4>

                <p><img src="../images/internacoes-hospitalares-por-acidentes-de-transito.png" title="Internações hospitalares por acidentes de trânsito" alt="Internações hospitalares por acidentes de trânsito">
                    Nossa fonte principal para o tratamento das hospitalizações causadas pelos acidentes de trânsito é o Sistema de Informações Hospitalares (SIH) do MS. Desenvolvido na década de 1970, visando controlar os pagamentos dos serviços prestados pelos hospitais contratados. Assim, conservando sua finalidade de atender o processo de remuneração das internações hospitalares financiadas pelo SUS, atualmente possui uma gigantesca base de dados, abrangendo as mais diversas atividades do setor, seja da rede pública, seja da privada ou filantrópica conveniada...
                </p>
            </div>
            <div class="ui-block-a">
                <h4 data-compression="7" data-max="20" class="align-center zero" title="Mortalidade no trânsito das capitais">
                    <a class="responsiveText-wrapper" href="../mortalidade-no-transito-das-capitais" title="Mortalidade no trânsito das capitais">Mortalidade no trânsito das capitais</a>
                </h4>

                <p><img src="../images/mortalidade-no-transito-das-capitais.png" title="Mortalidade no trânsito das capitais" alt="Mortalidade no trânsito das capitais">
                    Apesar do aumento da densidade e do volume do tráfego, a evolução decenal das mortes no trânsito das capitais foi bem menor que a registrada nas UF como um todo, onde o crescimento na década foi de 41,7% e as taxas aumentaram 27%. Já nas capitais, o número de óbitos em acidentes aumentou 9,2% e as taxas até caíram levemente: -2,3%. Esse diferencial pode ser atribuído à concentração da fiscalização, campanhas educativas, investimentos...
                </p>
            </div>
            <!--<div class="ui-block-b">Block B</div>-->
        </div><!-- /grid-b -->
    </div>

    <footer data-role="footer">
        <div class="map-site">
            <ul>
                <li><h4>Mapa do site</h4></li>
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
        <div class="social-midia">
            <a href="https://github.com/cicerocasj/trabalho-ihc"><i class="fa fa-github fa-4x"></i></a>
            <a href="https://www.facebook.com/pages/HTML5/412012098868673"><i class="fa fa-facebook-square fa-4x"></i></a>
            <a href="https://twitter.com/giulianobertoti"><i class="fa fa-twitter-square fa-4x"></i></a>
            <a href="mailto:secretaria.sjc@fatec.sp.gov.br"><i class="fa fa-envelope-o fa-4x"></i></a>
        </div>
        <div class="copy">
            <h5>Grupo Cícero | Raphael | Rodrigo</h5>
            <p>&copy 2014 Todos os direitos reservados.</p>
        </div>
    </footer>

</div>
<!-- Jquery Mobile -->
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="jquery.mobile-1.3.1.min.js"></script>
<script type="text/javascript" src="script-mobile.js"></script>
</body>
</html>
