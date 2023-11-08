<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina web preferencias cookies</title>
    <style>
        img{
            width: 10%;
        }
    </style>
</head>
<body>
    <?php
        class Camiseta {
            public $Nombre;
            public $Talla;
            public $urlImg;
        
            public function __construct($Nombre, $Talla, $urlImg) {
                $this->Nombre = $Nombre;
                $this->Talla = $Talla;
                $this->urlImg = $urlImg;
            }
        }
        class Pantalon {
            public $Nombre;
            public $Talla;
            public $urlImg;
        
            public function __construct($Nombre, $Talla, $urlImg) {
                $this->Nombre = $Nombre;
                $this->Talla = $Talla;
                $this->urlImg = $urlImg;
            }
        }

        $camisetas = [
            new Camiseta("Camisa blanca", "20", "https://clientes.oxfamintermon.org/643-large_default/camiseta-hombre-lisa-algorg-blanca-s.jpg"),
            new Camiseta("Camisa roja", "22", "https://www.masuniformes.com/cdnassets/RUS924MCR_l.jpg"),
            new Camiseta("Camisa azul", "18", "https://www.alphanoir.es/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/c/a/camisa-azul-marino-formal-de-hombre_1_1.jpg")
        ];

        $pantalones = [
            new Pantalon("Pantalon vaquero", "M", "https://www.shopmultimarca.es/uploads/photo/image/10930/gallery_A03283_iKmoJiW4.JPG"),
            new Pantalon("Pantalon negro", "L", "https://www.masuniformes.com/cdnassets/ADV250899-NEGRO-1_l.jpg"),
            new Pantalon("Pantalon militar", "XL", "https://www.zonatactica.es/2361-large_default/ropa-tactica-militar-pantalon-helikon-tex-m65.jpg")
        ];

        if(isset($_COOKIE['categoria'])){
            echo "
                <h2>Productos de " . $_COOKIE['categoria'] . "</h2>
            ";
            if($_COOKIE['categoria'] == "camisetas"){
                for($i = 0; $i < count($camisetas); $i++){
                    echo "
                        <img src='" . $camisetas[$i]->urlImg . "'/>
                        <p>" . $camisetas[$i]->Nombre . " - " . $camisetas[$i]->Talla . "</p>
                    ";
                }
            }
            else{
                for($i = 0; $i < count($pantalones); $i++){
                    echo "
                        <img src='" . $pantalones[$i]->urlImg . "'/>
                        <p>" . $pantalones[$i]->Nombre . " - " . $pantalones[$i]->Talla . "</p>
                    ";
                } 
            }
            echo "
                <h2>Selecciona una categoría de productos</h2>
                <form action='guardarCategoria.php' method='POST'>
                    <select name='categoria'>
                        <option value='camisetas'>Camisetas</option> 
                        <option value='pantalones'>Pantalones</option>
                    </select>
                    <input type='submit' value='Elegir Categoría'>
                </form>
            ";
        }
        else{
            echo "
                <h2>Selecciona una categoría de productos</h2>
                <form action='guardarCategoria.php' method='POST'>
                    <select name='categoria'>
                        <option value='camisetas'>Camisetas</option> 
                        <option value='pantalones'>Pantalones</option>
                    </select>
                    <input type='submit' value='Elegir Categoría'>
                </form>
            ";
        }
    ?>
</body>
</html>