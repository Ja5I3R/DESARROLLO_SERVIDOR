<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prediccion</title>
    <style>
        table, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <?php
            $location = $_POST["predictionValue"];

            echo "<h1>Prediccion de " . $location . "</h1>";

            $XML_URL = $location . ".xml";

            $FILE = file_get_contents($XML_URL);

            $XML = simplexml_load_string($FILE);

            $JSON = json_encode($XML);

            $xmlArr = json_decode($JSON, true);

            echo "<tr>";

            for($i = 1; $i < 8; $i++){
                echo "
                    <td>Dia " . $i . "</td>
                ";
            } ;

            echo "</tr>";

            echo "<tr>";

            foreach($xmlArr['prediccion']['dia'] as $value){
                echo "<td>
                    <p>Maxima = " . $value['temperatura']['maxima'] . "</p>
                    <p>Minima = " . $value['temperatura']['minima'] . "</p>
                </td>";
            }

            echo "</tr>";
        ?>
    </table>
</body>
</html>