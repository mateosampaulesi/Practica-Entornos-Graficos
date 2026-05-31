<?php
$destinatario = "destino@ejemplo.com";
$asunto = "Correo de prueba HTML";

$cuerpo = "
<html>
<head><title>Correo de prueba</title></head>
<body>
  <h1>Hola!</h1>
  <p>Este es un correo enviado con <b>formato HTML</b> desde PHP.</p>
  <p>Saludos.</p>
</body>
</html>
";

$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= "From: remitente@ejemplo.com\r\n";

mail($destinatario, $asunto, $cuerpo, $headers);
echo "Correo enviado correctamente.";
?>