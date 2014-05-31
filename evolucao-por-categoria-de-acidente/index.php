<?php include "../header.php"; ?>
    <div class="ui-grid-b my-breakpoint">
        <div id="notice" class="ui-block-a">
            <h4 title="Evolução por categoria de acidente" data-compression="7" data-max="20" class="align-center zero">
                Evolução por categoria de acidente
            </h4>
            <script type="text/javascript" src="../js/graficos_noticias/amcharts.js"></script>
            <script type="text/javascript" src="../js/graficos_noticias/serial.js"></script>
            <script type="text/javascript" src="../js/graficos_noticias/dark.js"></script>
            <script type="text/javascript" src="../js/graficos_noticias/grafico_noticia3.js"></script>
            <div id="chartdiv"></div>
            <p>
                Passado os efeitos imediatos do novo código de trânsito de 1997, em virtude de mobilizações, campanhas e atividades educativas nas ruas, já no ano 2000 observamos a retomada da mortalidade com preocupantes aumentos nos números e nas taxas. Assim, nos 11 anos entre 2000 e 2011, o número de mortes nas vias públicas passou de 28.995 para 43.256, o que representa um aumento de 49,2%. As taxas, considerando o aumento da população, também cresceram 31,7% entre 2000 e 2011.
                A partir de 1996, não só os números, também a estrutura e a composição desses acidentes mudaram. Segundo os registros do SIM. Se o número de mortes de pedestres caiu 52,1%; nas demais categorias, aumentou de forma trágica, destacando-se a morte de motociclistas, cujo número passa de 1.421 no ano de 1996 para 14.666 em 2011: incríveis 932,1% de crescimento, mais que decuplicando os números de 1996.
                Já a morte de ocupantes de automóveis cresceu, mas de forma mais lenta: 72,9% nos 15 anos analisados. Devemos ainda notar o fato de que, diretamente relacionadas às campanhas da nova lei, centradas acertadamente na figura do pedestre, categoria que mais morria no trânsito da época, os números caem de forma drástica até o ano 2000, quando se abandona esse tipo de campanha.
                Essas três categorias, pedestres, motociclistas e ocupantes de automóveis, somadas representam, ao longo de todo o período, em torno de 90% do total de mortes no trânsito do país.
                Desta forma, se na década passada eram largamente preponderantes as mortes de pedestres, para 2011, a morte de motociclistas ultrapassa as demais categorias, representando 1/3 das mortes no trânsito, com a preocupante tendência de um contínuo crescimento.
            </p>
        </div>
        <form action="../comentario.php" id="ajaxform" method="post">
            <input type="text" id="urlinvisivel" name="urlinvisivel" value=" " style="display: none;">
            <input type="text" id="noticiaId" name="noticiaId" value="2" style="display: none;">
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" data-mini="true" />
            <label for="message">Mensagem:</label>
            <textarea name="message" id="message"></textarea>
            <input type="submit" value="Enviar" id="sendbutton">
        </form>
        <script>
            document.getElementById('urlinvisivel').value = document.URL;
        </script>

        <div id="output-comments">

        </div>
    </div>
<?php include "../footer.php"; ?>