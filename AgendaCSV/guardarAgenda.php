<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exito</title>
</head>
<body>
    <?php
        $archivo = fopen("agenda.csv", "a");

        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $numero = $_POST["numeroTel"];

        $datos = array($nombre, $apellido, $numero);
        fputcsv($archivo, $datos, ",");

        fclose($archivo);
    ?>
    <h1>Se han guardado los datos correctamente</h1>
    <button onclick="location.href='Agenda.html'">Volver</button>
</body>
</html>

