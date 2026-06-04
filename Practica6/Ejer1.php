Consulta a una base de datos: Para comenzar la comunicación con un servidor de base de datos MySQL, es
necesario abrir una conexión a ese servidor. Para inicializar esta conexión, PHP ofrece la función
……………………………………………………………………………………… mysqli_connect()

Todos sus parámetros son opcionales, pero hay tres de ellos que generalmente son necesarios:
………………………………………………………………………………………… Servidor (host), Usuario y Contraseña Por ejemplo: mysqli_connect("localhost","root","1234");

Una vez abierta la conexión, se debe seleccionar una base de datos para su uso, mediante la función
…………………………………………………………………………………………. mysqli_select_db()

Esta función debe pasar como parámetro
…………………………………………………………………………………… La conexión abierta y el nombre de la base de datos. Ejemplo: mysqli_select_db($link,"empresa");

La función mysqli_query () se utiliza para
……………………………………… Ejecutar una consulta SQL sobre una base de datos.
y requiere como parámetros
………………………………………………………………………………………… La conexión y la consulta SQL a ejecutar. Ejemplo: mysqli_query($link,"SELECT * FROM clientes");


La cláusula or die() se utiliza para
……………………………………………… Detener la ejecución del programa y mostrar un mensaje de error cuando ocurre un problema. Ejemplo: mysqli_query($link,$sql) or die("Error en la consulta");
y la función mysqli_error () se puede usar para
………………………………………………………………………………………… Obtener el detalle del error producido por MySQL. Ejemplo: mysqli_query($link,$sql) or die(mysqli_error($link));

Si la función mysqli_query() es exitosa, el conjunto resultante retornado se almacena en una variable, por ejemplo
$vResult, y a continuación se puede ejecutar el siguiente código (explicarlo):
<?php
while ($fila = mysqli_fetch_array($vResultado))   Este ciclo recorre todas las filas obtenidas por la consulta SQL.
{
?>
<tr>
 <td><?php echo ($fila[0]); ?></td>
 <td><?php echo ($fila[1]); ?></td>
 <td><?php echo ($fila[2]); ?></td>  muestran en una tabla HTML los valores de las tres primeras columnas de cada registro recuperado.
</tr>
<tr>
 <td colspan="5">
<?php
}
mysqli_free_result($vResultado); libera la memoria ocupada por el conjunto de resultados.
mysqli_close($link); cierra la conexión con la base de datos MySQL.
?>