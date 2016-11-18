<?php

	//Email que será enviado
	$email = "contato@watchmycar.com.br";

	//Mensagem que será enviada para Email
	$mensagem = ""
				."<html>"
				."<br>"
				."<b>Nome:</b>".$_POST['nome']
				."<br>";
				if(isset($_POST['email'])){
					$mensagem 	.=""
								."<b>Email:</b> ".$_POST['email']
								."<br>";
				}

	$mensagem 	.="<b>Telefone:</b> ".$_POST['telefone']
				."<br>"
				."<b>Mensagem:</b> ".$_POST['mensagem'];

	//Header Obrigatório
	$headers  = "MIME-Version: 1.1\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: ". $_POST['email'] ." \r\n"; // remetente
	$headers .= "Return-Path: $email \r\n"; // return-path
	
	//Enviar e-mail
	if(mail($email, "Contato - Site", $mensagem, $headers,  "-r". $_POST['email'])){
		echo "{\"resposta:{\"code\":\"200\",\"status\":\"Email enviado com sucesso\"}\"}";
	}
	else{
		echo "{\"resposta:{\"code\":\"503\",\"status\":\"Falha no envio do Email\"}\"}";
	}


?>		