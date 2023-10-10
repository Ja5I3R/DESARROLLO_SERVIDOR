<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accidentes Bicicletas</title>
    <style>
        table, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Accidentes en bicicleta</h1>
        <table>
            <?php
                $file = fopen("AccidentesBicicletas_2022.csv", "r");
                $encabezados = fgets($file);
                $linea = explode(";", $encabezados);
                echo "
                    <tr>
                        <td>$linea[1]</td>
                        <td>$linea[9]</td>
                        <td>$linea[14]</td>
                    </tr>";
                
                for($j = 0; $j < 10; $j++){
                    $encabezados = fgets($file);
                    $linea = explode(";", $encabezados);
                    echo "
                    <tr>
                        <td>$linea[1]</td>
                        <td>$linea[9]</td>
                        <td>$linea[14]</td>
                    </tr>";
                }
            ?>
        </table>
</body>
</html>