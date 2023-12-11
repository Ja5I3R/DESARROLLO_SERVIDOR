<?php
session_start();
if(!isset($_SESSION['nombre_de_usuario'])) 
{
    header('Location: inicioAdmin.php'); 
    exit();
}
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $talla = $_POST['talla'];
    $color = $_POST['color'];
    $URL = $_POST['url'];

    $db = new PDO('mysql:host=localhost;dbname=productosDDBB', 'root', '');    
    $register = $db->exec('INSERT INTO productos (Nombre, Precio, Talla, Color, URL) VALUES ("'.$nombre.'","'.$precio.'","'.$talla.'","'.$color.'","'.$URL.'")');

    header('Location: insertData.php');
?>