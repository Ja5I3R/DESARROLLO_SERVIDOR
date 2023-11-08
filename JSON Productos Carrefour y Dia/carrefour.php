<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos de Carrefour</title>
    <style>
        body{
            font-family: "Gill Sans", sans-serif;
        }
        h1{
            text-align: center;
        }
        .gridDiv{
            display: grid;
            text-align: center;
            grid-template-columns: 33% 33% 33%;
            grid-gap: 20px;
        }
        .gridDiv div{
            padding: 10px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
        hr{
            border-color: blue;
            width: 30%;
        }
        img{
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Productos de Carrefour</h1>
    <?php
        $jsonURL = file_get_contents("https://www.carrefour.es/search-api/query/v1/search?query=colacao&scope=mobile&lang=es&session=544f9d86-37ef-46e0-878c-511f7ffa84bd&rows=24&start=0&origin=linked&f.op=OR");

        $jsonARRAY = json_decode($jsonURL, true);

        echo "<div class='gridDiv'>";

        foreach($jsonARRAY['content']['docs'] as $value){
            echo "
                <div>
                    <img src=' " . $value['image_path'] . "'/>
                    <h3>" . $value['display_name'] . "</h3>
                    <hr>
                    <p class='price'>" . $value['active_price'] . "€</p>
                </div>
            ";
        }

        echo "</div>";
    ?>
</body>
</html>