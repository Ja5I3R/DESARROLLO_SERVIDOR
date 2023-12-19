<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda resultado</title>
    <style>
        table, td{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Listado de resultados</h1>
    <table>
        <thead>
            <td>Nombre</td>
            <td>Telefono</td>
        </thead>
        <?php
            $name = $_POST['name'];

            include 'accesomongo.php';

            searchData($name);
        ?>
    </table>
    <button onclick="location.href='searchData.php'">Volver</button>
</body>
</html>