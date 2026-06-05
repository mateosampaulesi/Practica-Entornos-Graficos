<?php

if(isset($_POST['titular']))
{
    setcookie("titular",$_POST['titular'],time()+3600*24*30);
    header("Location: periodico.php");
}

?>

<html>
<body>

<h1>Periódico Online</h1>

<form method="post">

    <input type="radio" name="titular" value="politica">
    Política
    <br>

    <input type="radio" name="titular" value="economia">
    Economía
    <br>

    <input type="radio" name="titular" value="deportes">
    Deportes
    <br><br>

    <input type="submit" value="Guardar Preferencia">

</form>

<hr>

<?php

if(!isset($_COOKIE['titular']))
{
    echo "<h3>Noticia Política</h3>";
    echo "<h3>Noticia Económica</h3>";
    echo "<h3>Noticia Deportiva</h3>";
}
else
{
    if($_COOKIE['titular']=="politica")
    {
        echo "<h3>Noticia Política</h3>";
    }

    if($_COOKIE['titular']=="economia")
    {
        echo "<h3>Noticia Económica</h3>";
    }

    if($_COOKIE['titular']=="deportes")
    {
        echo "<h3>Noticia Deportiva</h3>";
    }
}

?>

<br><br>
<a href="borrar.php"> Borrar Preferencia </a>
</body>
</html>