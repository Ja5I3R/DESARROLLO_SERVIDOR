<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Concesionario</title>
    <style>
        body{
            text-align: center;
        }
        table, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Datos de concesionario</h1>
<?php
    $archivo = fopen("concesionario.csv", "r");
    echo "<table>
            <tr>
                <td>Nombre</td>
                <td>Matricula</td>
                <td>Numero telefono</td>
                <td>Email</td>
                <td>Marca</td>
                <td>Uso de seguro</td>
                <td>Horas de llegada</td>
            </tr>
    ";

    $linea = fgets($archivo);
    while($linea != null){
        $dato = explode(",",$linea);
        echo "
            <tr>
                <td>$dato[0]</td>
                <td>$dato[1]</td>
                <td>$dato[2]</td>
                <td>$dato[3]</td>
                <td>$dato[4]</td>
                <td>$dato[5]</td> 
                <td>$dato[6] $dato[7] $dato[8]</td>
        ";
        echo "</tr>";
        $linea = fgets($archivo);
    }
?>
</body>
</html>