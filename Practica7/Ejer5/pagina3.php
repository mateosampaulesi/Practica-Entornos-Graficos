<?php

session_start();

echo "Usuario: ";

echo $_SESSION['usuario'];

echo "<br>";

echo "Clave: ";

echo $_SESSION['clave'];

?>