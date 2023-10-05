<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <style>
        body{
            text-align: center;
        }
        table, td{
            border: 1px solid black;
        }
        td{
            padding: 10px;
        }
        table{
            margin : 0 auto;
        }
    </style>
</head>
<body>
    <h1>Agenda</h1>
    <?php
    $archivo = fopen("agenda.csv", "r");

    $datos = array();
    while (($linea = fgetcsv($archivo, 1000, ",")) !== false) {
        $datos[] = $linea;
    }

    fclose($archivo);

    echo "<table>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Numero telefono</td>
            </tr>
    ";
    foreach ($datos as $linea) {
        echo "<tr>";
        echo "<td>" . $linea[0] . "</td>";
        echo "<td>" . $linea[1] . "</td>";
        echo "<td>" . $linea[2] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>