<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar usuario</title>
</head>
<body>
    <h1>Busqueda de usuario</h1>
    <form action="dataSearch.php" method="post">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name"><br><br>
        <input type="submit" value="Buscar">
    </form>
    <button onclick="location.href='index.php'">Volver a listado</button>
</body>
</html>