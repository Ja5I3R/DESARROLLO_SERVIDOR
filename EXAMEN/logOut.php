<?php
session_start();

session_destroy();

header('Location: inicioAdmin.php');
exit();
?>