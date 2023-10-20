<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <?php
    $user = $_POST["user"];
    $password = $_POST["password"];

    $archivo = fopen("usuarios.txt", "r");

    $canRegister = true;

    while (($datos = fgets($archivo)) !== false) {
        $linea = explode(",", $datos);
        if ($linea[0] == $user && $linea[1] == $password) {
            $canRegister = false;
            break; 
        }
    }

    fclose($archivo);

    if ($canRegister) {
        echo "<h1>Se ha podido registrar con éxito, ya puedes iniciar sesion</h1>";
        
        $archivo2 = fopen("usuarios.txt", "a");

        $datos = array($user, $password);
        $texto = implode(",", $datos);
        $texto2 = "\n" . $texto;

        fputs($archivo2, $texto2);

        fclose($archivo2);

        echo "<a href='index.php'>Inicio de Sesion</a>";

    } else {
        echo "<h1>No es posible usar otro usuario y contraseña ya existentes</h1>";
        echo "<a href='pageRegister.php'>Volver al registro</a>";
    }
    ?>
</body>
</html>