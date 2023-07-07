<?php
$_SESSION['logged_in'] = false; //imposto false anche se poi la distruggo
session_start();
session_destroy();
header("location: index.php");
exit;
?>