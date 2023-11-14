<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contaminación madrid</title>
    <style>
        table, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Contaminacion madrid</h1>
    <table>
        <?php
            $estaciones = array(
                "28079001" => "Pº. Recoletos Baja",
                "28079002" => "Glta. de Carlos V Baja",
                "28079003" => "Pza. del Carmen",
                "28079004" => "Pza. de España",
                "28079005" => "Barrio del Pilar",
                "28079006" => "Pza. Dr. Marañón Baja",
                "28079007" => "Pza. M. de Salamanca Baja",
                "28079008" => "Escuelas Aguirre",
                "28079009" => "Pza. Luca de Tena Baja",
                "28079010" => "Cuatro Caminos",
                "28079011" => "Av. Ramón y Cajal",
                "28079012" => "Pza. Manuel Becerra Baja",
                "28079013" => "Vallecas",
                "28079014" => "Pza. Fdez. Ladreda Baja",
                "28079015" => "Pza. Castilla Baja",
                "28079016" => "Arturo Soria",
                "28079017" => "Villaverde Alto",
                "28079018" => "C/ Farolillo",
                "28079019" => "Huerta Castañeda Baja",
                "28079020" => "Moratalaz",
                "28079021" => "Pza. Cristo Rey Baja",
                "28079022" => "Pº. Pontones Baja",
                "28079023" => "Final C/ Alcalá Baja",
                "28079024" => "Casa de Campo",
                "28079025" => "Santa Eugenia Baja",
                "28079026" => "Urb. Embajada (Barajas) Baja",
                "28079027" => "Barajas",
                "28079047" => "Méndez Álvaro Alta",
                "28079048" => "Pº. Castellana Alta",
                "28079049" => "Retiro Alta",
                "28079050" => "Pza. Castilla Alta",
                "28079054" => "Ensanche Vallecas Alta",
                "28079055" => "Urb. Embajada (Barajas) Alta",
                "28079056" => "Plaza Elíptica Alta",
                "28079057" => "Sanchinarro Alta",
                "28079058" => "El Pardo Alta",
                "28079059" => "Parque Juan Carlos I Alta",
                "28079060" => "Tres Olivos Alta"
            );
            
            $magnitudes = array(
                "1" => "Dióxido de Azufre SO2",
                "6" => "Monóxido de Carbono CO",
                "7" => "Monóxido de Nitrógeno NO",
                "8" => "Dióxido de Nitrógeno NO2",
                "9" => "Partículas < 2.5 µm PM2.5",
                "10" => "Partículas < 10 µm PM10",
                "12" => "Óxidos de Nitrógeno NOx",
                "14" => "Ozono O3",
                "20" => "Tolueno TOL",
                "30" => "Benceno BEN",
                "35" => "Etilbenceno EBE",
                "37" => "Metaxileno MXY",
                "38" => "Paraxileno PXY",
                "39" => "Ortoxileno OXY",
                "43" => "Metano CH4"
            );

            $file = fopen("horario.csv", "r");
            $encabezados = fgets($file);
            $linea = explode(";", $encabezados);
            echo "
                <tr>
                    <td>$linea[2]</td>
                    <td>$linea[3]</td>
            ";
            for($i = 8; $i < count($linea); $i++){
                echo "<td>$linea[$i]</td>";
            }
            echo "</tr>";
            
            for($j = 0; $j < 10; $j++){
                //Fila actual de datos
                $encabezados = fgets($file);

                //Datos separados en array
                $linea = explode(";", $encabezados);

                //Dato especifico para nombre de estacion
                $cadena = $linea[4];

                //Separacion del dato del nombre en un array
                $partes = explode("_", $cadena);

                //Codigo de la estacion en base al codigo separado
                $codigoEstacion = $partes[0];

                //Codigo de magnitud en base al dato de la tabla "Magnitud"
                $codigoMagnitud = $linea[3];
                
                echo "
                <tr>
                    <td>$estaciones[$codigoEstacion]</td>
                    <td>$magnitudes[$codigoMagnitud]</td>
                ";
                for($i = 8; $i < count($linea); $i++){
                    echo "<td>$linea[$i]</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>