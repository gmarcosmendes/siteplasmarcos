<?php
 
function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
}
 
function validaEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
 
function enviaEmail($de, $nome, $subject,$empresa, $assunto, $mensagem, $para, $email_servidor) {
    $body = "Nome: ".$nome. "\r\n".
    "Empresa: ".$empresa. "\r\n".
    "E-mail: ".$email. "\r\n".
    "Assunto: ".$assunto. "\r\n".
    "Mensagem: ".$mensagem;
    $headers = "From: $email_servidor\r\n" .
               "Reply-To: $de\r\n" .
               "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
  mail($para, $assunto, nl2br($mensagem), $headers);
}
 
$email_servidor = "smtp.plasmarcos.com.br";
$para = "gabriel@plasmarcos.com.br";	
$nome = pegaValor("nome");
$de = pegaValor("email");
$subject = pegaValor("subject");
$mensagem = pegaValor("mensagem");
$assunto = "Contato pelo Site";
$empresa = pegaValor("empresa")

if ($nome && validaEmail($de) && $mensagem) {
    enviaEmail($de, $nome, $subject, $assunto, $mensagem, $para, $email_servidor);
    $pagina = "mail_ok.php";
} else {
    $pagina = "mail_error.php";
}
 
header("location:$pagina");
 
?>