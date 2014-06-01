<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Mortalidade no Trânsito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="../css/jquery.mobile-1.3.1.min.css" />
    <link rel="stylesheet" href="../css/grafico_noticia.css" />
    <link rel="stylesheet" href="../css/styles.css" />
<!--    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">-->
    <script type="text/javascript" src="../js/graficos_noticias/amcharts.js"></script>
    <script type="text/javascript" src="../js/graficos_noticias/serial.js"></script>
    <script type="text/javascript" src="../js/graficos_noticias/dark.js"></script>
</head>
<body>
<div data-role="page" id="home" data-theme="c">
    <div data-role="panel" id="navpanel-left" data-theme="c"
         data-display="overlay" data-position="left">
        <div data-role="controlgroup" data-corners="false">
            <a href="../home" data-role="button" title="Home" rel="external">Home</a>
            <a href="https://github.com/cicerocasj/trabalho-ihc" data-role="button" title="Código" rel="external">Código</a>
            <a href="../contato" data-role="button" title="Contato" rel="external">Contato</a>
        </div>
    </div>
    <div data-role="panel" id="navpanel" data-theme="c"
         data-display="overlay" data-position="right">
        <div data-role="controlgroup" data-corners="false">
            <a href="../evolucao-dos-acidentes-de-transito/" data-role="button" rel="external">Evolução dos acidentes de trânsito</a>
            <a href="../evolucao-dos-acidentes-de-transito" data-role="button" rel="external">Evolução por categoria de acidente</a>
            <a href="../frota-veicular-e-mortalidade-no-transito" data-role="button" rel="external">Frota veicular e mortalidade no trânsito</a>
            <a href="../internacoes-hospitalares-por-acidentes-de-transito" data-role="button" rel="external">Internações hospitalares por acidentes de transito</a>
            <a href="../mortalidade-no-transito-das-capitais" data-role="button" rel="external">Mortalidade no trânsito das capitais</a>
        </div>
    </div>
    <div id="header" data-role="header" data-theme="a">
        <a id="bars-button-left" data-icon="bars"  class="ui-btn-left menu-mobile" style="margin-top:10px;" href="#navpanel-left">Menu</a>
        <a id="bars-button" data-icon="bars"  class="ui-btn-right menu-mobile" style="margin-top:10px;" href="#navpanel">Ultimas noticias</a>
        <div class="menu-tablet">
            <a href="../home" title="Home" rel="external">Home</a>
            <a href="https://github.com/cicerocasj/trabalho-ihc" title="Código" rel="external">Código</a>
            <a href="../contato" title="Contato" rel="external">Contato</a>
        </div>
    </div>
    <div id="index" data-role="content">