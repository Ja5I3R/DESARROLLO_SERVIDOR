<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion de datos correcta</title>
</head>
<body>
    <?php
    $archivo = fopen("concesionario.csv", "a");

                $nombre = $_POST["nombre"];
                $matricula = $_POST["matricula"];
                $telefono = $_POST["telefono"];
                $email = $_POST["email"];
                $marca = $_POST["marca"];
                $seguro = $_POST["seguro"];
                if(isset($_POST["hora1"])){
                    $hora1 = $_POST["hora1"];
                }
                else{
                    $hora1 = "";
                }
                if(isset($_POST["hora2"])){
                    $hora2 = $_POST["hora2"];
                }
                else{
                    $hora2 = "";
                }
                if(isset($_POST["hora3"])){
                    $hora3 = $_POST["hora3"];
                }
                else{
                    $hora3 = "";
                }

    $datos = array($nombre, $matricula, $telefono, $email, $marca, $seguro, $hora1, $hora2, $hora3);
    fputcsv($archivo, $datos, ",");

    fclose($archivo);
    ?>
    <h1>Se han guardado los datos correctamente</h1>
    <button onclick="location.href='index.php'">Volver</button>
</body>
</html>