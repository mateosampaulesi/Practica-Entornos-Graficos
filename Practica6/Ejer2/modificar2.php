<?php

include("conexion.php");

mysqli_query($link,"UPDATE Ciudades SET ciudad='$_POST[ciudad]' WHERE id=$_POST[id]");

echo "Ciudad modificada";

?>