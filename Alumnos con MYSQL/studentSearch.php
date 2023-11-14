<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de alumno</title>
    <style>
        body{
            background-color: #CCBBEE;
        }
        input[type="text"] {
        max-width:400px;
            width: 80%;
        line-height:3em;
        font-family: 'Ubuntu', sans-serif;
        margin:1em 2em;
        border-radius:5px;
        border:2px solid #f2f2f2;
        outline:none;
        padding-left:10px;
        }
        input[type="submit"] {
        height:30px;
        width:100px;
        background:#fff;
        border:1px solid #f2f2f2;
        border-radius:20px;
        color: slategrey;
        text-transform:uppercase;
        font-family: 'Ubuntu', sans-serif;
        cursor:pointer;
        }
        button {
        height:30px;
        width:100px;
        background:#fff;
        border:1px solid #f2f2f2;
        border-radius:20px;
        color: slategrey;
        text-transform:uppercase;
        font-family: 'Ubuntu', sans-serif;
        cursor:pointer;
        }
    </style>
</head>
<body>
    <h1>Busqueda de alumno</h1>
    <form method="POST" action="resultSearch.php">
        <input type="text" name="nameUser" id="nameUser" required placeholder="Nombre"><br>
        <input type="submit" value="Buscar" name="buttonChk">
    </form><br>
    <button onclick="window.location.href = 'index.php'">Volver a listado</button>
</body>
</html>