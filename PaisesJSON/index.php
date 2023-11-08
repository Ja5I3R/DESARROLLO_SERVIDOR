<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
    <style>
        table, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Paises JSON</h1>
    <table>
        <?php
            $url = "https://restcountries.com/v3.1/all";

            $json = file_get_contents($url);

            $array = json_decode($json, true);

            echo "<tr>
                <td>Nombre pais</td>
                <td>Nombre capital</td>
                <td>Link GM</td>
            </tr>";

            foreach ($array as $value){
                echo "<tr>
                    <td>" . $value['name']['common'] . "</td> ";
                    if(isset($value['capital'][0])){
                        echo "<td>" . $value['capital'][0] . "</td>";
                    }
                    else{
                        echo "<td>Without capital</td>";
                    }
                echo "<td><a href=" . $value['maps']['googleMaps']. ">" . $value['maps']['googleMaps'] . "</a></td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>