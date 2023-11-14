<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de busqueda</title>
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
        background-color: rgba(5, 5, 100, 95);
        padding: 10px;
        }
        div{
            display:flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <h1>Resultado de busqueda</h1>
    <?php
        $searchName = $_POST['nameUser'];

        $db = new PDO('mysql:host=localhost;dbname=alumnosServer', 'root', '');
        $result = $db->query("SELECT * FROM alumnos where Nombre = '$searchName'");

        if(($alumno = $result->fetch()) != null){
            echo "
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
            ";
            do{
                echo "
                <tr>
                    <td>". $alumno['Nombre'] ."</td>
                    <td>". $alumno['Apellido'] ."</td>
                </tr>
                ";
            }
            while($alumno = $result->fetch());
            echo "</table>";
        }
        else{
            echo "No se encontraron resultados";
        }
    ?>
    <a href="studentSearch.php">Volver a la Busqueda</a>
</body>
</html>