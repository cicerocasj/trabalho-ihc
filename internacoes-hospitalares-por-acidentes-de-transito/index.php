<?php include "../header.php"; ?>
    <div class="ui-grid-b my-breakpoint" id="single-notice">
        <div id="notice" class="ui-block-a">
            <h4 title="Internações hospitalares por acidentes de trânsito" data-compression="7" data-max="20" class="align-center zero">
                Internações hospitalares por acidentes de trânsito
            </h4>
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
        <div class="ui-block-a">
            <form action="../comentario.php" id="ajaxform" method="post">
                <input type="text" id="urlinvisivel" name="urlinvisivel" value=" " style="display: none;">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" data-mini="true" />
                <label for="message">Mensagem:</label>
                <textarea name="message" id="message"></textarea>
                <input type="submit" value="Enviar" id="sendbutton">
                <input type="text" id="noticiaId" name="noticiaId" value="4" style="display: none;">
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