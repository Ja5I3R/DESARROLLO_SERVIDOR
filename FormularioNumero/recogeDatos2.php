<html>
    <head>
        <?php
            $color = $_GET["color"];
            echo "<style>body{background-color: $color;}</style>";
        ?>
    </head>
    <body>
        <?php
            $a = $_GET["numero"];
            $array= array("Primera frase","Segunda frase","Tercera frase");
            echo $array[$a];
        ?>
    </body>
</html>