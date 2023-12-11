<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insercion de datos</title>
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['nombre_de_usuario'])) 
        {
            header('Location: inicioAdmin.php'); 
            exit();
        }
    ?>
    <h1>Datos necesarios</h1>
    <form action="dataInsertRun.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre" required><br><br>
        <label for="precio">Precio</label><br>
        <input type="number" name="precio" id="precio" required><br><br>
        <label for="talla">Talla</label><br>
        <input type="text" name="talla" id="talla" required><br><br>
        <label for="color">Color</label><br>
        <input type="text" name="color" id="color" required><br><br>
        <label for="url">URL</label><br>
        <input type="text" name="url" id="url" required><br><br>
        <input type="submit" value="Entrar">
    </form>
    <a href="logOut.php">Cerrar sesion</a>
</body>
</html>