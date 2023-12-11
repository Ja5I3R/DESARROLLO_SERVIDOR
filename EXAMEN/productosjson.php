<?php
    $db = new PDO('mysql:host=localhost;dbname=productosDDBB', 'root', '');
    $result = $db->query('SELECT * FROM productos');

    $products = array();

    while($producto = $result->fetch()){
        $individual = array(
            "Nombre" => $producto['Nombre'],
            "Precio" => $producto['Precio'],
            "Talla" => $producto['Talla'],
            "Color" => $producto['Color'],
            "URL" => $producto['URL']
        );

        $products[] = $individual;
    }

    echo json_encode($products);
?>