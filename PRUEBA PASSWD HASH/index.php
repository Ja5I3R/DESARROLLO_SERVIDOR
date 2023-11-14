<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
</head>
<body>
    <h1>Inicio de sesion</h1>
    <form action="sessionTry.php" method="POST">
        <label for="name">Nombre</label><br>
        <input type="text" name="name" id="name"><br><br>
        <label for="passwd">Contraseña</label><br>
        <input type="password" name="passwd" id="passwd"><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>