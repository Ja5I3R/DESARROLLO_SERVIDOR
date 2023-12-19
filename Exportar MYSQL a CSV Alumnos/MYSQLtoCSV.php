    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion de MYSQL a CSV</title>
</head>
<body>
    <?php
        $db = new PDO('mysql:host=localhost;dbname=alumnosServer', 'root', '');
        $result = $db->query('SELECT * FROM alumnos');

        $file = fopen("alumnos.csv", "w");

        while($student = $result->fetch()){
            $name = $student['Nombre'];
            $surname = $student['Apellido'];

            $data = array($name, $surname);
            fputcsv($file, $data, ";");
        }
        fclose($file);

        echo "<h1>Se han guardado los datos correctamente en CSV</h1>";
    ?>
</body>
</html>