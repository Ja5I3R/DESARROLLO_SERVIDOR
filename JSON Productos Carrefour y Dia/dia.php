<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos de Dia</title>
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
    <h1>Productos de Dia</h1>
    <?php
        $jsonURL = file_get_contents("https://www.dia.es/api/v1/search-insight/initial_analytics?q=cerveza&sort=&page=1&page_size=30&filters=");

        $jsonARRAY = json_decode($jsonURL, true);

        echo "<div class='gridDiv'>";

        foreach($jsonARRAY['search_products_analytics'] as $value){
            echo "
                <div>
                    <h3>" . ucfirst($value['item_name']) . "</h3>
                    <hr>
                    <p class='price'>" . $value['price'] . "€</p>
                </div>
            ";
        }

        echo "</div>";
    ?>
</body>
</html>