<?php

require_once('class.phpmailer.php');

$nome       = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
$email      = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$telefone   = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING);


$Email = new PHPMailer();
$Email->SetLanguage("br");
$Email->IsSMTP(); // Habilita o SMTP 
$Email->CharSet = "UTF-8";
$Email->SMTPSecure = "ssl";
$Email->SMTPAuth = true; //Ativa e-mail autenticado
$Email->Host = 'mail.olimpoconstrutora.com.br'; // Servidor de envio # verificar qual o host correto com a hospedagem as vezes fica como smtp.
$Email->Port = '465'; // Porta de envio
$Email->Username = 'carvalho@olimpoconstrutora.com.br'; //e-mail que será autenticado
$Email->Password = 'salvejorge1234'; // senha do email
// ativa o envio de e-mails em HTML, se false, desativa.
$Email->IsHTML(true);
// email do remetente da mensagem
$Email->From = utf8_decode($email);
// nome do remetente do email
$Email->FromName = $nome;
// Endereço de destino do email, ou seja, pra onde você quer que a mensagem do formulário vá?
    $Email->AddAddress("carvalho@olimpoconstrutora.com.br");
    $Email->AddAddress("junio.santos.ps@gmail.com");    

$Email->Subject = "Page Leads:";
$Email->Body .= "<br /><br />
        <strong>Você recebera nosso email em breve.<strong> <br><br>
        <strong>Nome:</strong> $nome<br /><br />
        <strong>E-mail:</strong> $email<br /><br />
        <strong>Telefone:</strong> $telefone<br /><br />";
// verifica se está tudo ok com oa parametros acima, se nao, avisa do erro. Se sim, envia.

if (!$Email->Send()) {
    echo "<p>A mensagem não foi enviada. </p>";
//    echo "Erro: " . $Email->ErrorInfo;
} else {
    echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    echo "<script>window.location = 'http://localhost/UPNEWS/tableless/index.php'</script>";
   
}
//https://olimpoconstrutora.com.br