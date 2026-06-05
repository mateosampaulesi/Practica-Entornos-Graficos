<?php

session_start();

$link = mysqli_connect("localhost", "root","");

mysqli_select_db($link,"base2");

$resultado = mysqli_query($link, "SELECT * FROM alumnos WHERE mail='$_POST[mail]'");

if($fila = mysqli_fetch_array($resultado))
{
    $_SESSION['nombre'] = $fila['nombre'];
    echo "Alumno encontrado<br><br>";
    echo "<a href='bienvenida.php'> Continuar </a>";
}
else
{
    echo "No existe alumno con ese mail";
}

mysqli_close($link);

?>