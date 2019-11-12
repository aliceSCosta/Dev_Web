<?php

    $banana = $_GET["quantidade"];
    $valor1 = 0.15;
    $valor2 = 0.20;

    if($banana >= 12){
        $preco1 = $banana * $valor1;
        echo "Preço R$$preco1";
    }
    else{
        $preco2 = $banana * $valor2;
        echo "Preço R$$preco2";
    }