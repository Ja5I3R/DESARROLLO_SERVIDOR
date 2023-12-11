<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto especifico</title>
    <style>
        table, td{
            padding: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        $Nombre = $_GET['Nombre'];
        $Precio = $_GET['Precio'];
        $Talla = $_GET['Talla'];
        $Color = $_GET['Color'];
        $URL = $_GET['URL'];

        echo "
            <img src='". $URL ."'/><br>
            <h3>Datos del producto</h3>
            <table>
                <tr>
                    <td>Nombre</td>
                    <td>". $Nombre ."</td>
                </tr>
                <tr>
                    <td>Precio</td>
                    <td>". $Precio ."</td>
                </tr>
                <tr>
                    <td>Talla</td>
                    <td>". $Talla ."</td>
                </tr>
                <tr>
                    <td>Color</td>
                    <td>". $Color ."</td>
                </tr>
            </table>
        ";
        echo "<a href='examenIndex.php'>Volver a listado</a>";
    ?>
</body>
</html>