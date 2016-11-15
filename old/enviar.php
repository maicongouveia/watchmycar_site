<?php 

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: contato@watchmycar.com.br\r\n"; // remetente
$headers .= "Return-Path: contato@watchmycar.com.br\r\n"; // return-path
$texto = "Nome: ".$_POST["nome"]."<br/>";
$texto .= "Email: ".$_POST["email"]."<br/>";
$texto .= "Telefone: ".$_POST["telefone"]."<br/>";
$texto .= "Mensagem: ".$_POST["mensagem"]."<br/>";
$envio = mail("contato@watchmycar.com.br", "Contato do site WatchMyCar", $texto, $headers);
 
if($envio)
 header("Location:contatos.php?enviado=1"); 
else
 header("Location:contatos.php?enviado=0"); 

?>