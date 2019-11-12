<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 2</title>
</head>
<body>

    <?php

        $num = $_GET["ano"];
        $anoatual = 2019;

        $resultado = $anoatual - $num;

        if($resultado >= 16){

            echo "<figure><img src='img/positivo.png' alt='Pode'</figure>";
        }
        else{
            echo "<figure><img src='img/nao.png' alt='Não Pode'</figure>";
        }

    ?>
    
</body>
</html>


    