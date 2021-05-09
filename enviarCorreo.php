<?php
//error_reporting(0);
ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    date_default_timezone_set('America/Mexico_City');
$nombre = $_POST['nombre'];
$from= $_POST['email'];
$telefono = $_POST['telefono'];
$headers = "From: " . $from . "\r\n" . "Reply-To: " . $from . "\r\n" . "X-Mailer: PHP/" . phpversion(); 
/* . " \r\n" . "Content-Type: text/html";*/

$message = $nombre . " desea contactar contigo \r\n" . "Su e-mail es: " . $from . " \r\n"
. "Su número telefónico es: " . $telefono . " \r\n" ."Mensaje: ". $_POST['mensaje'] . " \r\n \r\n" 
. "Enviado el " . date('d/m/Y  H:i:s');

$to = "erickparacompartir@gmail.com";
/*$para = "erickparacompartirgmail.com";*/
$subject = "Contacto CV";

/*mail($para, $asunto, utf8_decode($mensaje), $header);*/
//mail("erickcarranzameza@gmail.com", "Probando", "El mensaje" );
mail($to,$subject,utf8_decode($message), $headers);
//echo "Mensaje enviaso";

require('index.html');
//localhost
//25

?>