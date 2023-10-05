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
            $nombre = $_POST["nombre"];
            $matricula = $_POST["matricula"];
            $telefono = $_POST["telefono"];
            $email = $_POST["email"];
            $marca = $_POST["marca"];
            $seguro = $_POST["seguro"];
            if(isset($_POST["hora1"])){
                $hora1 = $_POST["hora1"];
            }
            else{
                $hora1 = " ";
            }
            if(isset($_POST["hora2"])){
                $hora2 = $_POST["hora2"];
            }
            else{
                $hora2 = " ";
            }
            if(isset($_POST["hora3"])){
                $hora3 = $_POST["hora3"];
            }
            else{
                $hora3 = " ";
            }

            echo "<h1>Datos del propietario y vehiculo</h1>";
            echo "<table>
                <tr>
                    <td> Nombre </td>
                    <td> $nombre </td>
                </tr>
                <tr>
                    <td> Matricula </td>
                    <td> $matricula </td>
                </tr>
                <tr>
                    <td> Telefono </td>
                    <td> $telefono </td>
                </tr>
                <tr>
                    <td> Email </td>
                    <td> $email </td>
                </tr>
                <tr>
                    <td> Marca </td>
                    <td> $marca </td>
                </tr>
                <tr>
                    <td> Usa seguro? </td>
                    <td> $seguro </td>
                </tr>
                <tr>
                    <td> Horas de llegada </td>
                    <td> $hora1 $hora2 $hora3 </td>
                </tr>
            </table>";
         ?>
    </body>
</html>
