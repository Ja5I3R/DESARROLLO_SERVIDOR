<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <style>
        table, td{
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $url = "http://localhost/Ejercicios/ContactosJSON/agendajson.php";

            $json = file_get_contents($url);

            if ($json === false) {
                echo "Error al cargar el archivo JSON.";
            }
            else{
                echo "<h1>Contactos JSON</h1>";
                $data = json_decode($json, true);

                echo "<tr>
                    <td>Nombre</td>
                    <td>Telefono</td>
                </tr>";

                foreach($data as $value){
                    echo "<tr>
                        <td>" . $value['Nombre'] . "</td>
                        <td>" . $value['Numero'] . "</td>
                    </tr>";
                }
            }
        ?>
    </table>
</body>
</html>