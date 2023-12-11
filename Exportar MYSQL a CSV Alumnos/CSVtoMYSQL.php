<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion de CSV a MYSQL</title>
</head>
<body>
    <?php
        $file = fopen("alumnos.csv", "r");

        $data = array();
        while (($line = fgetcsv($file, 1000, ";")) !== false) {
            $data[] = $line;
        }

        $db = new PDO('mysql:host=localhost;dbname=alumnosServer', 'root', '');
        $result = $db->query('SELECT * FROM alumnos');

        if($result->fetch() != null){
            $delete = $db->exec('DELETE from alumnos');
        }
        foreach ($data as $line) {
            $register = $db->exec('INSERT INTO alumnos (Nombre, Apellido) VALUES ("' . $line[0] . '", "'. $line[1] .'")');
        }
        echo "Se han importado los datos de manera correcta";
    ?>
</body>
</html>