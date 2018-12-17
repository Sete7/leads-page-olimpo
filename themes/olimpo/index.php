<!--FECHA HEADER-->            
<div id="banner">
    <!--<img src="assets/image/banner_bg.jpg" alt=""/>-->
    <div id="banner_formulario">
        <div id="banner_desc">
            <h1>
                Há <strong>20 
                    anos restaurando</strong> Brasília
            </h1>
        </div>
        <div class="formulario">

            <?php
            if (isset($_POST['nome']) && !empty($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $phone = addslashes($_POST['phone']);

                $para = "junio.santos.ps@gmail.com";
                $assunto = "Assunto teste";
                $corpo = " Nome: " . $nome . " E-mail: " . $email . " Telefone: " . $phone;
                $cabeçalho = "FROM: junio.santos.ps@gmail.com" . "\r\n" .
                        "Reply-to: " . $email . "\r\n" .
                        "X-Mailer: PHP/" . phpversion();
                mail($para, $assunto, $corpo, $cabeçalho);
//                            echo "Email enviado com sucesso";                          
                echo "<script>window.location = 'http://localhost/UPNEWS/tableless/obrigado'</script>";
            }
            ?>
            <!--<form method="POST" action="mailer/form-contato.php">-->
            <form method="POST" action="">
                <div class="form-group">
                    <input type="text" name="nome" placeholder="NOME" required=""/>
                    <div class="icon">
                        <span class="thumb">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-user.png" alt=""/>
                        </span>    
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="EMAIL" required=""/>
                    <div class="icon">
                        <span class="thumb mail">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-envelope.png" alt=""/>
                        </span>    
                    </div>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" placeholder="TELEFONE" required=""/>
                    <div class="icon">
                        <span class="thumb">
                            <img src="<?= REQUIRE_PATH; ?>/assets/image/icon-phone.png" alt=""/>
                        </span>    
                    </div>
                </div>
                <input type="submit" class="btn_enviar" name="btnEnviar" value="ENVIAR"/>
            </form>
            <!--FECHA FORMULARIO-->
        </div>
    </div> 
    <!--FECHA BANNER TOPO-->
</div> 
<!--FECHANDO ID BOX--> 
