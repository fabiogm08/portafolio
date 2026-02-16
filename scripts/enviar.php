<?php 

$nombre = $_POST['nombre']; 
$mail = $_POST['email']; 

$header = 'From: ' . $mail . " rn"; 
$header .= "X-Mailer: PHP/" . phpversion() . " rn"; 
$header .= "Mime-Version: 1.0 rn"; 
$header .= "Content-Type: text/plain"; 

$mensaje = "Este mensaje fue enviado por " . $nombre . " rn"; 
$mensaje .= "Su e-mail es: " . $mail . " rn"; 
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " "; 
$mensaje .= "Enviado el " . date('d/m/Y', time()); 

$para = 'fabioan06@hotmail.com'; 
$asunto = 'Contacto desde la web'; 

mail($para, $asunto, utf8_decode($mensaje), $header); 

echo 'http://portafoliofgm.comlu.com/'; 
?>   