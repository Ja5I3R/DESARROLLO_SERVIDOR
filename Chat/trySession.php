<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
    <?php
        $user = $_POST["user"];
        $password = $_POST["password"];

        $archivo = fopen("usuarios.txt", "r");

        $canLogin = false;

        while (($datos = fgets($archivo)) !== false) {
            $linea = explode(",", $datos);
            if ($linea[0] == $user && $linea[1] == $password) {
                $canLogin = true;
                break; 
            }
        }
        fclose($archivo);

        if($canLogin){
            session_start();
            $_SESSION['nombre_de_usuario'] = $linea[0];
            header('Location: chat.php');
            exit();
        }
        else{
            echo "<p>No existe tal usuario ni contraseña</p>";
            echo "<a href='index.php'>Volver a inicio de sesion</a>";
        }
    ?>
</body>
</html>