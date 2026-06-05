<?php

if(isset($_POST['nombre']))
{
    setcookie("usuario", $_POST['nombre'],time()+3600*24*30);
    header("Location: usuario.php");
}

?>

<html>
<body>
<form method="post">
    Nombre:
    <input type="text" name="nombre">
    <input type="submit" value="Guardar">
</form>

<?php

if(isset($_COOKIE['usuario']))
{
    echo "<br>";
    echo "Último usuario: ";
    echo $_COOKIE['usuario'];
}

?>

</body>
</html>