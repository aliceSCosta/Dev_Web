<?php

    $valor = $_GET["senha"];

    if($valor == 1234){
        echo "Acesso permitido";
    }
    else{
        echo "Acesso negado";
    }
