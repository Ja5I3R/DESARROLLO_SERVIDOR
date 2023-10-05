<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        body{
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .Cabecera{
            background: linear-gradient(#1D5D9B, #75C2F6);
            width: 80%;
            height: 12%;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 10px;
            border: 1px solid black;
            margin-bottom: 20px;
        }
        </style>
    </head>
    <body>
        <?php 
            $valor1 = $_POST['valor1'];
            $valor2 = $_POST['valor2'];
            $operador = $_POST['operador'];
            $resultadoUser = $_POST["resultado"];
            $resultado = 0;
            switch($operador){
                case "+":
                    $resultado = $valor1 + $valor2;
                    break;
                case "-":
                    $resultado = $valor1 - $valor2;
                    break;
                case "/":
                    $resultado = $valor1 / $valor2;
                    break;
                case "*":
                    $resultado = $valor1 * $valor2;
                    break;
            }
            $texto = "";
            $botonVolver = "";
            $botonVolver2 = "";

            if($resultado == $resultadoUser){
                $texto = "Correcto";
                $botonVolver2 = "<input type='submit' value='Volver'>";
            }
            else{
                $texto = "Incorrecto";
                $botonVolver = "<button onclick='history.back()'>Volver atras</button>";
            }
            echo "
            <div class='Cabecera'>
            <p>Resultado $texto!</p>
            <form action='index.php' method='post'>
            $botonVolver2
            </form>
            $botonVolver
            </div>
            "
        ?>
    </body>
</html>