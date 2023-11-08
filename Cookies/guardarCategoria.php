<?php
    $categoria = $_POST['categoria'];
    setcookie('categoria', $categoria, time() + 3600, '/');
    header('Location: index.php');
?>