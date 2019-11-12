<?php

    $idades = array("Du"=>"18", "Alice"=>"18", "Vitão"=>"52", "Mc Kevinho"=>"17");

    echo "Idade do Vitão: " . $idades['Vitão'] . "<br>";

    foreach($idades as $nome => $idade){
        echo "Nome: " . $nome . ", Idade: " . $idade . "<br>";
    }

    echo "<hr>";

    $valor = "19";

    $num = (int)$valor;