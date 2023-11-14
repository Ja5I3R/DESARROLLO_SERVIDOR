<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de alumnos</title>
    <style>
        body {
        background-color: #CCBBEE;
        }
        h1{
            text-align: center;
        }
        table {
        background: white;
        width: 50%;
        margin: 0 auto;
        margin-top: 2%;
        border-collapse: collapse;
        text-align: center;
        }
        th {
        background-color: rgba(5, 5, 100, 95);
        height: 35px;
        border-bottom: 1px solid rgb(210, 220, 250);
        color: white;
        }
        td {
        color: rgba(100, 100, 100, 60);
        height: 30px;
        border: 0.5px solid rgba(240, 240, 240, 10);
        }
        tfoot {
        font-weight: bold;
        }
        a{
        text-decoration: none;
        color: white;
        font-size: 14pt;
        }
        div{
            display:flex;
            justify-content: center;
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
    <h1>Listado de alumnos</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
    <?php
        try{
            $db = new PDO('mysql:host=localhost;dbname=alumnosServer', 'root', '');
            $result = $db->query('SELECT * FROM alumnos');

            while($alumno = $result->fetch()){
                echo "
                    <tr>
                        <td>". $alumno['Nombre'] ."</td>
                        <td>". $alumno['Apellido'] ."</td>
                    </tr>
                ";
            }
        }
        catch(PDOException){
            echo 'Falló la conexión';
        }
    ?>
    </table><br>
    <div>
        <button onclick="window.location.href = 'studentSearch.php'">Buscar alumno</button>
        <button onclick="window.location.href = 'studentInsert.php'">Insertar alumno</button>
    </div>
</body>
</html>