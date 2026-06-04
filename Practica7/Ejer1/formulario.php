<?php

if(isset($_POST['estilo']))
{
    setcookie("estilo", $_POST['estilo'],time()+3600*24*30);
    header("Location: formulario.php");
}

$estilo = $_COOKIE['estilo'] ?? "claro";

?>

<html>
<head>
<link rel="stylesheet" href="<?php echo $estilo; ?>.css">
</head>
<body>
<form method="post">

    <select name="estilo">

        <option value="claro">
        Claro
        </option>

        <option value="oscuro">
        Oscuro
        </option>

    </select>

<input type="submit" value="Guardar">

</form>

<h1>Mi página</h1>

</body>
</html>