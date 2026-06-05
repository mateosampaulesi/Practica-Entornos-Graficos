<?php

session_start();

$_SESSION['usuario'] = $_POST['usuario'];

$_SESSION['clave'] = $_POST['clave'];

?>

<a href="pagina3.php"> Ver datos </a>