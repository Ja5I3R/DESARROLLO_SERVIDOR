<?php
    $name = $_POST['name'];
    $tlf = $_POST['tlf'];

    include "accesomongo.php";

    insertData($name, $tlf);

    echo "La insercion se ha realizado con exito";
    echo "<br><a href='InsertData.php'>Volver</a>";
?>