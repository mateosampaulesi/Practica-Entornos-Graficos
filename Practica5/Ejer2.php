<?php
if (isset($_POST['submit'])) {
    $nombre   = $_POST['nombre'];
    $email    = $_POST['email'];
    $consulta = $_POST['consulta'];

    $destinatario = "webmaster@ejemplo.com";
    $asunto       = "Consulta de: $nombre";
    $cuerpo       = "Nombre: $nombre\nEmail: $email\n\nMensaje:\n$consulta";

    $headers = "From: $email\r\n";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<p>Tu consulta fue enviada con éxito. ¡Gracias!</p>";
    } else {
        echo "<p>Hubo un error al enviar. Intentá de nuevo.</p>";
    }
} else {
?>
<html>
<head><title>Contacto</title></head>
<body>
  <h2>Contacto</h2>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Email:</label><br>
    <input type="text" name="email"><br><br>

    <label>Consulta:</label><br>
    <textarea name="consulta" rows="5" cols="40"></textarea><br><br>

    <input type="submit" name="submit" value="Enviar">
  </form>
</body>
</html>
<?php } ?>