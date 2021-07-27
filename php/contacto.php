<?php
$Nombre = $_POST ['Nombre'];
$Apellido = $_POST ['Apellido'];
$Telefono = $_POST ['Telefono'];
$Email = $_POST ['Email'];
$Mensaje = $_POST ['Mensaje'];

$header = 'From: ' .$Email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$header .="Mime-Version: 1.0 \r\n";
$header .="Content.Type: text/plain";

$message = "Este mensaje fue enviado por" .$Nombre $Apellido. " \r\n";
$message .= "Su e-mail es:" . $Email . " \r\n";
$message .= "Teléfono de contacto:" . $Telefono . " \r\n";
$message .= " Mensaje enviado por:" . $_POST ['Mesanje'] . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());

$para = 'andrescoronalugo@gmail.com';
$asunto = ' Mensaje de Rombo';

mail ($para, $asunto, utf8_decode($Mensaje), $header);

header('Location:index.html');
?>
