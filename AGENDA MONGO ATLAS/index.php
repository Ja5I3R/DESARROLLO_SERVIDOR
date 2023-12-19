<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda MongoDB</title>
    <style>
        table, td{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Listado de contactos</h1>
    <table>
        <thead>
            <td>Nombre</td>
            <td>Telefono</td>
        </thead>
        <?php
            include 'accesomongo.php';

            viewList();
        ?>
    </table>
    <button onclick="location.href='InsertData.php'">Insertar contacto</button>
    <button onclick="location.href='searchData.php'">Buscar contacto</button>
</body>
</html>