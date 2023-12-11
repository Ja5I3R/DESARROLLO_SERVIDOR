<?php
    $user = $_POST['nombre'];
    $passwd = $_POST['pass'];

    $archivo = fopen("credentials.txt", "r");

    $canLogin = false;

        while (($datos = fgets($archivo)) !== false) {
            $linea = explode(",", $datos);
            $verification = password_verify($passwd, $linea[1]);
            if ($linea[0] == $user && $verification == 1) {
                $canLogin = true;
                break; 
            }
        }
        fclose($archivo);

        if($canLogin){
            session_start();
            $_SESSION['nombre_de_usuario'] = $linea[0];
            header('Location: insertData.php');
            exit();
        }
        else{
            echo "<p>No existe tal usuario ni contraseña</p>";
            echo "<a href='inicioAdmin.php'>Volver a inicio de sesion</a>";
        }
?>