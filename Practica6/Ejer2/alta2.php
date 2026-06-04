<?php

include("conexion.php");

mysqli_query($link,
"INSERT INTO Ciudades
(ciudad,pais,habitantes,superficie,tieneMetro)
VALUES
(
'$_POST[ciudad]',
'$_POST[pais]',
$_POST[habitantes],
$_POST[superficie],
$_POST[metro]
)"
);

echo "Ciudad agregada";

?>