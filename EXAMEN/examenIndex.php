<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de productos</title>
</head>
<body>
    <h1>Listado de productos</h1>
    <?php
        class Producto{
            public $Talla;
            public $Color;
            public $Precio;
            public $Nombre;
            public $URL;

            public function __construct($Talla, $Color, $Precio, $Nombre, $URL){
                $this->Talla = $Talla;
                $this->Color = $Color;
                $this->Precio = $Precio;
                $this->Nombre = $Nombre;
                $this->URL = $URL;
            }
        }

        $productos = array();

        $url = "http://localhost/Ejercicios/EXAMEN/productosjson.php";

        $json = file_get_contents($url);

        if ($json === false) {
            echo "Error al cargar el archivo JSON.";
        }
        else{
            $data = json_decode($json, true);

            foreach($data as $value){
                $individualProduct = new Producto(
                    $value['Talla'], 
                    $value['Color'],
                    $value['Precio'],
                    $value['Nombre'],
                    $value['URL']
                );

                $productos[] = $individualProduct;
            }
        }
        echo "<ul>";
        for($i = 0; $i < count($productos); $i++){
            if($productos[$i]->Nombre != ""){
                echo "
                <a href='verProducto.php?Nombre=". $productos[$i]->Nombre ."
                &Talla=". $productos[$i]->Talla ."
                &Color=". $productos[$i]->Color ."
                &Precio=". $productos[$i]->Precio ."
                &URL=". $productos[$i]->URL ."'><li>" . $productos[$i]->Nombre . "</li></a>
            ";
            }
        }
        echo "</ul>";

        echo "<a href='inicioAdmin.php'>Iniciar sesion admin</a>";
    ?>
</body>
</html>