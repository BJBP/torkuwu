<?php
$to ='jaison.03042000@gmail.com';
$subject ='Gracias por tu compra en mitienda.com';
$from='tienda@midominio.com';
$header='MIME-Version 1.0'."\r\n";
$header.= 'From: Tienda <tienda@midominio.com>' . "\r\n";
$header.="Content-type: text/html; charset=iso-8859-1\r\n";
$message="Hola esta es una prueba";
if(mail($to, $subject, $message, $header)){
echo "mensaje enviado correctamente";
}else{
echo 'no se pudo enviar el email';
}
?>