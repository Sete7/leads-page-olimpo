<?php
require './app/config.php';
?>
<!--DOCTYPE html-->
<html  lang="pt-br" itemscope="" itemtype="http://schema.org/Article">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <title>Leads - Olimpo</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="keywords" content="Page Leads, Informe Publicidade, Marketing,olimpoconstrutora">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
        <link href="<?= INCLUDE_PATH; ?>/assets/image/favicon.ico" rel="shortcut icon">        
        <link href="<?= INCLUDE_PATH; ?>/assets/css/style.css" rel="stylesheet" type="text/css"/>                
    </head>
    <body>
        <div id="box">
            <header id="header">   
                <div id="header_logo">
                    <a href="<?= HOME; ?>" title="Olimpo Construtora">
                        <img src="<?= INCLUDE_PATH; ?>/assets/image/logo.jpg" alt="olimpo" title="Olimpo Construtora" border="0"/>
                    </a>
                </div>
                <!--FECHA HEADER LOGO-->
                <div id="header_social">
                    <ul class="header_menu">
                        <li>
                            <a href="https://www.facebook.com/olimpoconstrutora"  target="_blank" title="olimpo facebook">
                                <img src="<?= INCLUDE_PATH; ?>/assets/image/icon_face.png" alt="olimpo facebook"/>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/olimpoconstrutora" target="_blank" title="olimpo instagram">                                
                                <img src="<?= INCLUDE_PATH; ?>/assets/image/icon-instagram.png" alt="olimpo instagram"/>                                
                            </a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=5561992368011&text=olimpoconstrutora" target="_blank" title="Chame pelo WhatsApp">
                                <img src="<?= INCLUDE_PATH; ?>/assets/image/icon-whatsapp.png" alt="Chame pelo WhatsApp"/>
                            </a>
                        </li>
                        <li class="phone">
                            <p>
                                <span>(61)</span> 3022-2645
                            </p>
                        </li>
                    </ul>
                </div>
                <!--FECHA REDE SOCIAL-->
            </header>
            <!-- --------------------------------- conteudo ---------------------------- --> 
            <?php
            $Url[1] = (empty($Url[1]) ? null : $Url[1]);
            if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
                require REQUIRE_PATH . '/' . $Url[0] . '.php';
            elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
                require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
            else:
                require REQUIRE_PATH . '/404.php';
            endif;
            ?>
            <!-- --------------------------------- conteudo ---------------------------- -->   

            <!--FECHA CONTENT-->
            <footer id="footer_all">
                <div id="footer">

                </div>
                <!--FECHA FOOTER-->
                <div id="footer_social">

                </div>
                <!--FECHA FOOTER SOCIAL-->
            </footer>
            <!--FECHA FOOTER ALL-->
        </div>
        <!--FECHA BOX-->
    </body>
</html>