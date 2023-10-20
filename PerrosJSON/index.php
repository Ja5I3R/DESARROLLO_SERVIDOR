<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perros JSON</title>
</head>
<body>
    <h1>Imagenes de perro JSON</h1>
    <?php
        $url = "https://dog.ceo/api/breeds/image/random";

        $json = file_get_contents($url);

        $image = json_decode($json, true);

        $imgURL = $image['message'];

        echo "<img src='$imgURL' alt='perro'></img>"
    ?>
</body>
</html>