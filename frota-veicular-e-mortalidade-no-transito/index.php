<?php include "../header.php"; ?>
    <div class="ui-grid-b my-breakpoint" id="single-notice">
        <div id="notice" class="ui-block-a">
            <h4 title="Frota veicular e mortalidade no trânsito" data-compression="7" data-max="20" class="align-center zero">
                Frota veicular e mortalidade no trânsito
            </h4>
            <script type="text/javascript" src="../js/graficos_noticias/grafico_noticia4.js"></script>
            <div id="chartdiv"></div>
            <p>
                Em geral, para comparar dados relativos a locais ou épocas diferentes, são utilizadas taxas que tomam como base a população de cada local ou período. Um indicador mais acurado para comparar acidentes de trânsito seria o tamanho da frota de veículos em circulação. Obviamente, um país cuja população possui poucos automóveis vai ter taxas de acidentes bem inferiores aos de outro país com grande número de carros. Isso não acontece porque os primeiros sejam melhores condutores, ou as ruas tenham melhor traçado ou sinalização, e sim pelo número de veículos em circulação. Porém são escassos os países que possuem dados discriminados de frota veicular. No Brasil, o Denatran, no seu site oficial, fornece especificações da frota registrada nacionalmente pela instituição, mas só a partir de 1998, quando já iniciara o que poderíamos denominar o boom das motocicletas.
                Segundo o próprio Denatran, em 1970 a motocicleta era um item de baixa representatividade: num parque total de 2,6 milhões de veículos, só havia registradas 62.459 motocicletas: 2,4% do parque total.
                Na virada do século, no ano 2000, temos 4,0 milhões de motocicletas registradas, o que já representa 13,6% do parque veicular. Para 2011, o número pula para 18,4 milhões, representando 26,1% do total nacional de veículos registrados pelo Denatran
            </p>
        </div>
        <div class="ui-block-a">
            <form action="../comentario.php" id="ajaxform" method="post">
                <input type="text" id="urlinvisivel" name="urlinvisivel" value=" " style="display: none;">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" data-mini="true" />
                <label for="message">Mensagem:</label>
                <textarea name="message" id="message"></textarea>
                <input type="submit" value="Enviar" id="sendbutton">
                <input type="text" id="noticiaId" name="noticiaId" value="3" style="display: none;">
                <span id="text-result"></span>
            </form>
        </div>
        <script>
            document.getElementById('urlinvisivel').value = document.URL;
        </script>

        <div id="output-comments">
            <ul></ul>
        </div>
    </div>
<?php include "../footer.php"; ?>