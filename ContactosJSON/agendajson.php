<?php
    $file = fopen("contactos.csv", "r");
    $contacts = array();

    while(($row = fgets($file)) !== false){
        $row = str_replace("\xef\xbb\xbf", "", $row);

        $separated = explode(";", $row);

        if(stristr($separated[1] , "\r\n")){
            $separated[1] = str_replace("\r\n", "", $separated[1]);
        }

        $individual = array(
            "Nombre" => $separated[0],
            "Numero" => $separated[1]
        );

        $contacts[] = $individual;
    }

    fclose($file);

    echo json_encode($contacts);
?>