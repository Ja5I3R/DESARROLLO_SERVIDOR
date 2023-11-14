<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Insercion</title>
</head>
<body>
    <?php
        $name = $_POST['nameUser'];
        $surnameUser = $_POST['surnameUser'];
        $db = new PDO('mysql:host=localhost;dbname=alumnosServer', 'root', '');
        $register = $db->exec('INSERT INTO alumnos (Nombre, Apellido) VALUES ("' . $name . '", "'. $surnameUser .'")');
        echo "<h1>Insercion exitosa</h1>";
        echo "<a href='studentInsert.php'>Volver a insercion de datos</a>";
    ?>
</body>
</html>