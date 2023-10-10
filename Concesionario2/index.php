<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <style>
        body{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Datos para concesionario</h1>
    <form action="recogedatos.php" method="POST">
        <label for="n1">Nombre</label><input type="text" id="n1" name="nombre" placeholder="Nombre"><br><br>
        <label for="n2">Matricula</label><input type="text" id="n2" name="matricula" placeholder="Matricula"><br><br>
        <label for="n3">Telefono</label><input type="number" id="n3" name="telefono" placeholder="Telefono"><br><br>
        <label for="n4">Email</label><input type="email" id="n4" name="email" placeholder="Email"><br><br>
        <label for="n5">Marca</label><select name="marca" id="n5">
            <?php
                $archivo = fopen("marcas.csv", "r");
                while (($linea = fgetcsv($archivo, 1000, ",")) !== false) {
                    echo "<option value='" . $linea[1] . "'>" . $linea[0] . "</option>";
                }
                fclose($archivo);
            ?>
        </select><br><br>
        <input type="radio" name="seguro" value="Si" id="n6"><label for="n6">Si usa seguro</label>
        <input type="radio" name="seguro" value="No" id="n7"><label for="n7">No usa seguro</label><br>
        <h4>Horas de llegada</h4>
        <input type="checkbox" name="hora1" id="n8" value="Mañana"><label for="n8">Mañana</label><br>
        <input type="checkbox" name="hora2" id="n9" value="Tarde"><label for="n9">Tarde</label><br>
        <input type="checkbox" name="hora3" id="n10" value="Noche"><label for="n10">Noche</label><br><br>
        <input type="submit">
    </form>
    <form action="verDatos.php">
        <input type="submit" value="Ver datos de concesionario">
    </form>
</body>
</html>