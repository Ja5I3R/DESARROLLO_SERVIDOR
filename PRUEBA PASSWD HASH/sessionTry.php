<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intento de sesion</title>
</head>
<body>
    <?php
        $passwd = $_POST['passwd'];
        //Para hashear password
        //$hash = password_hash($passwd, PASSWORD_DEFAULT);
        //echo $hash;
        //Prueba = $2y$10$K2Eoa.sxKmU5cSKfhJk73.PPEJbqZ038o1IvihM/A731z8QZ0EuQG
        //prueba = $2y$10$czCZ5sEbgaUNekBjPZD6zetewn5h3e7B/stmC6R0d5phSKzyHwFES
        $hashCop = '$2y$10$K2Eoa.sxKmU5cSKfhJk73.PPEJbqZ038o1IvihM/A731z8QZ0EuQG';
        $verification = password_verify($passwd, $hashCop);
        //Da 1 si es true, no da nada si es false
        echo "<p>Verficacion" . $verification . "</p>";
    ?>  
</body>
</html>