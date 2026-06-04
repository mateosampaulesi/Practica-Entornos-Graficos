<?php

include("conexion.php");

$resultado = mysqli_query($link, "SELECT * FROM Ciudades");

echo "<table border='1'>";

echo "<tr>";

echo "<th>ID</th>";
echo "<th>Ciudad</th>";
echo "<th>Pais</th>";
echo "<th>Habitantes</th>";
echo "<th>Superficie</th>";
echo "<th>Metro</th>";

echo "</tr>";

while($fila = mysqli_fetch_array($resultado))
{

echo "<tr>";

echo "<td>".$fila['id']."</td>";

echo "<td>".$fila['ciudad']."</td>";

echo "<td>".$fila['pais']."</td>";

echo "<td>".$fila['habitantes']."</td>";

echo "<td>".$fila['superficie']."</td>";

echo "<td>".$fila['tieneMetro']."</td>";

echo "</tr>";

}

echo "</table>";

mysqli_close($link);

?>