<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
    <style>
        body{
            text-align: center;
            font-family: Monospace; 
            background: linear-gradient(lightblue, white);
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        fieldset{
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Inicio de sesion</h1>
    <fieldset>
        <form action="trySession.php" method="POST">
            <label for="c1">Usuario</label><br><input type="text" name="user" id="c1"><br><br>
            <label for="c2">Contraseña</label><br><input type="text" name="password" id="c2"><br><br>
            <input type="submit" value="Iniciar sesion">
        </form><br>
        <a href="pageRegister.php">¿No tienes cuenta? Registrate aqui</a>
    </fieldset>
</body>
</html>