<?php
session_start();

if (!isset($_SESSION['paginas'])) {
    $_SESSION['paginas'] = 0;
}

$_SESSION['paginas']++;

echo "<p>Has visitado <b>" . $_SESSION['paginas'] . "</b> página(s) durante esta sesión.</p>";
?>