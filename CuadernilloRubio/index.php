<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadernillo rubio</title>
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
        .Cuerpo{
            background: linear-gradient(#1D5D9B, #75C2F6);
            width: 80%;
            height: 22%;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php 

    $valor1 = rand(0, 100);
    $valor2 = rand(0, 100);
    $operando = rand(0, 3);
    $operador = "";

    switch($operando){
        case 0:
            $operador = "+";
            break;
        case 1:
            $operador = "-";
            break;
        case 2:
            $operador = "/";
            break;
        case 3:
            $operador = "*";
            break;
    }

    echo "
    <div class='Cabecera'>
        <h2>Cuadernillo rubio</h2>
    </div>
    <div class='Cuerpo'>
        <form method='POST' action='recogedatos.php'>
            <h3>$valor1 $operador $valor2</h3>
            <input type='hidden' value='$valor1' name='valor1'>
            <input type='hidden' value='$valor2' name='valor2'>
            <input type='hidden' value='$operador' name='operador'>
            <input type='number' name='resultado'><br><br>
            <input type='submit' value='Enviar'>
        </form>
    </div>
        
        ";
    ?>
</body>
</html>