<?php
if(!isset($_COOKIE['contador']))
{
    echo "Bienvenido. Es tu primera visita.";
    setcookie("contador",1,time()+3600*24*30);
}
else
{
    $visitas = $_COOKIE['contador'] + 1;
    setcookie("contador", $visitas,time()+3600*24*30);
    echo "Visitaste esta página ";
    echo $visitas;
    echo " veces.";
}

?>