<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
    <form action="trySession.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre" id="nombre"><br><br>
        <label for="pass">Contraseña</label><br>
        <input type="password" name="pass" id="pass"><br><br>
        <input type="submit" value="Entrar">
    </form>
    <a href='examenIndex.php'>Volver a listado</a>;
</body>
</html>