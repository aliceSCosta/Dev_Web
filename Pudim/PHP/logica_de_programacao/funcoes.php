<?php

    escreverHello();

    for($i=0; $i<5; $i++){
        escreverHello();
    }

    function escreverHello(){
        echo "Hello World <br>";
    }

    echo "<hr>";

    function familia($nome){
        echo "$nome Silva.<br>";
    }

    familia ("Pedro");
    familia ("Maria");

    /////////////////////////////////////////////

    echo "<hr>";

    function familiaIdade($nome, $idade){
        echo "$nome Silva. Idade $idade";
    }

    familiaIdade("Avatar", "35");

    /////////////////////////////////////////////

    function somar($num1, $num2){
        echo $num1 + $num2;
    }

    somar(5, 10);

    /////////////////////////////////////////////

    echo "<hr>";

    function somarComReturn($num1, $num2){
        return $num1 + $num2;
    }

    $resultado = somarComReturn(5, 10);
    echo $resultado;