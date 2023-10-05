<html>
    <head>
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
        <style>
            h1{
                text-align: center;
            }
            table{
                border: black 1px solid;
                text-align: center;
                margin-left: auto;
                margin-right: auto;
            }
            td{
                border: black 1px solid;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <?php
            $nombre = $_GET["nombre"];
            $edad = $_GET["edad"];
            $sexo = $_GET["sexo"];
            $color = $_GET["color"];
            $noticias = $_GET["noticias"];
            if(isset($_GET["hora1"])){
                $hora1 = $_GET["hora1"];
            }
            else{
                $hora1 = " ";
            }
            if(isset($_GET["hora2"])){
                $hora2 = $_GET["hora2"];
            }
            else{
                $hora2 = " ";
            }
            if(isset($_GET["hora3"])){
                $hora3 = $_GET["hora3"];
            }
            else{
                $hora3 = " ";
            }

            echo "<h1>Datos personales</h1>";
            echo "<table>
                <tr>
                    <td> Nombre </td>
                    <td> $nombre </td>
                </tr>
                <tr>
                    <td> Edad </td>
                    <td> $edad </td>
                </tr>
                <tr>
                    <td> Sexo </td>
                    <td> $sexo </td>
                </tr>
                <tr>
                    <td> Color </td>
                    <td> <div style='background-color: $color; width: 50px; height: 50px;'></div> </td>
                </tr>
                <tr>
                    <td> Recibir noticias </td>
                    <td> $noticias </td>
                </tr>
                <tr>
                    <td> Horas de llegada </td>
                    <td> $hora1 $hora2 $hora3 </td>
                </tr>
            </table>";
         ?>
    </body>
</html>
