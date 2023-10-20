<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat en vivo</title>
    <style>
        body{
            text-align: center;
            font-family: Monospace; 
            background: linear-gradient(lightblue, white);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['nombre_de_usuario'])) 
        {
            header('Location: index.php'); 
            exit();
        }

        $nombre_de_usuario = $_SESSION['nombre_de_usuario'];
        echo "<h3>Bienvenido $nombre_de_usuario</h3>";
    ?>
    <form action="savePost.php" method="POST">
        <textarea name="c1" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Enviar mensaje">
    </form>
    <a href="logout.php">Desconectarse</a>
    <h3>Mensajes recientes</h3>
    <fieldset>
        <?php
            $archivo = fopen("chats.txt", "r");

            while(($dato = fgets($archivo)) !== false){
                $linea = explode(" - ", $dato);

                echo "<p>$linea[0] - $linea[1]</p>";
                echo "<p>$linea[2]</p><br><br>";
            }
        ?>
    </fieldset>
</body>
</html>