<html>
    <head>

    </head>
    <body>
        <?php
            $pais = $_GET["pais"];
            $arrayPaises = array("españa.png", "portugal.png","Suecia.png");
            echo "<div></div>";
            echo "<style>
            div{
                width: 500px; 
                height: 500px; 
                background-image: url($arrayPaises[$pais]);
                background-size: cover;
            }</style>"
        ?>
    </body>
</html>