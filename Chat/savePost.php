<?php
    session_start();
    $user = $_SESSION['nombre_de_usuario'];
    $message = $_POST["c1"];
    $date = date("Y-m-d H:i:s");

    $archivo = fopen("chats.txt", "a");

    $datos = array($user,$date,$message);

    $texto = implode(" - ", $datos);

    $archivoURL = "chats.txt";

    if(filesize($archivoURL) == 0){
        $texto2 = $texto;
    }
    else{
        $texto2 = "\n" . $texto;
    }

    fputs($archivo, $texto2);

    header('Location: chat.php');
    exit();
?>