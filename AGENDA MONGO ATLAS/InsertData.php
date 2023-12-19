<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda MongoDB</title>
</head>
<body>
    <h1>Insercion de contacto</h1>
    <form action="dataInsert.php" method="POST">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="tlf">Telefono</label>
        <input type="tel" name="tlf" id="tlf" required><br><br>
        <input type="submit" value="Enviar datos">
    </form>
    <a href="index.php">Volver a listado</a>
</body>
</html>