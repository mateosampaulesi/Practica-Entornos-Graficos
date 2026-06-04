<?php

include("conexion.php");

mysqli_query($link,"DELETE FROM Ciudades WHERE id=$_POST[id]");

echo "Ciudad eliminada";

?>