<?php
$include_css = '<link rel="stylesheet" href="../css/grafico_noticias/grafico_noticia.css"/>';
include "../header.php";
?>
    <div class="row">
        <article class="four fifths">
            <div class="row">
                <div class="banner-center two fourth one-up-small-tablet one-up-mobile padded bounceInDown animated">
                    <div class="box square banner" id="banner">
                        <div class="wrapper">
                            <div class="jcarousel">
                                <ul>
                                    <li><a href="http://www.amcharts.com/"><img src="../images/amcharts.png" alt="AmCharts" title="AmCharts"></a></li>
                                    <li><a href="http://www.detran.sp.gov.br/"><img src="../images/detrans-sp.png" alt="Detran SP" title="Detran SP"></a></li>
                                    <li><a href="http://www.dpvatsegurodotransito.com.br/"><img src="../images/dpvat.jpg" alt="Seguro DPVAT" title="Seguro DPVAT"></a></li>
                                </ul>
                            </div>
                            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                            <p class="jcarousel-pagination"></p>
                        </div>
                    </div>
                </div>
                <div class="row contato">
                    <div class="one third one-up-small-tablet one-up-mobile padded bounceInDown animated">
                        <div class="notice box gray square white">
                            <h4 data-compression="7" data-max="20" class="align-center zero">
                                Cícero Alves
                            </h4>
                            <p><img src="../images/cicero.jpg" alt="Cícero Alves" title="Cícero Alves"/></p>
                        </div>
                    </div>
                    <div class="one third one-up-small-tablet one-up-mobile padded bounceInDown animated">
                        <div class="notice box gray square white">
                            <h4 data-compression="7" data-max="20" class="align-center zero">
                                Raphael Willian
                            </h4>
                            <p><img src="../images/raphael.jpg" alt="Raphael Willian" title="Raphael Willian"/></p>
                        </div>
                    </div>
                    <div class="one third one-up-small-tablet one-up-mobile padded bounceInDown animated">
                        <div class="notice box gray square white">
                            <h4 data-compression="7" data-max="20" class="align-center zero">
                                Rodrigo Monteiro
                            </h4>
                            <p><img src="../images/rodrigo.jpg" alt="Rodrigo Monteiro" title="Rodrigo Monteiro"/></p>
                        </div>
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