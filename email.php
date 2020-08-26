<?php

if(isset($_POST['email']) $$ !empty($_POST['email'])){



$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['message']);


$to = "contato@programadorbr.com";
$subject = "Contato - João Vitor";
$body = "Nome:".$nome. "\n".
		"Email:".$email."\n".
		"Mensagem":.$mensagem;

$header = "From:igor@programadorbr.com"."\r\n".
			"Reply-to:".$email."\r\n".
			"X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

	echo("Email enviado com sucesso!")

}else {

echo("O Email não pode ser enviado");
	# code...
}			

}

?>