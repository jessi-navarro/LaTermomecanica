<?php
$name = $_POST ['nombre']
$email = $_POST ['email']
$comonosconociste = $_POST ['Comonosconociste']
$sexo = $_POST ['sexo']
$porqueteinteresaelproyecto = $_POST ['Porqueteinteresaelproyecto']
$comentarios = $_POST ['comentarios']



$header = 'From: ' .$mail . " /r/n";
$header .= "X-Mailer: PHP/" . phpversion() . " /r/n";
$header .= "Mime-Version: 1.0 /r/n";
$header .= "Content-Type: text/plain";


$message = "Este mensaje fue enviado por ". $name . " /r/n";
$message = "Su mail es ". $email . " /r/n";
$message = "Nos conoce porque ". $comonosconociste . " /r/n";
$message = "Sexo ". $sexo . " /r/n";
$message = "Le interesa el proyecto porque ". $porqueteinteresaelproyecto . " /r/n";
$message = "Comentarios: " . $_POST['mensaje'] . " /r/n";


$para = 'jessicaraquelnavarro@gmail.com';
$asunto = 'Contacto La Termo'

mail($para, $asunto, utf8_decode($message), $header);

header("Location: contacto.html");
?>