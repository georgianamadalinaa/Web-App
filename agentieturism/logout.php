<?php
// Inițializarea sesiunii
session_start();

// Distrugerea tuturor datelor de sesiune
$_SESSION = array();

// Distrugerea sesiunii
session_destroy();

// Redirecționare către pagina de login
header("location: login.php");
exit;
?>
