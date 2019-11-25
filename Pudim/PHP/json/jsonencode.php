<?php

    //simulação de uma aplicação do backend

    $carros=array("Brasilia", "Variant", "Kadet", "Monza", "Escort", "Veraneio");

    echo json_encode($carros);

    echo "<hr>";

    $idade = array("Du"=>18, "Victor"=>35, "Leo"=>17);

    echo json_encode($idade);

    echo "<hr>";

    $pessoas = array(
        array('nome'=>'Rodrigo', 'idade'=>32, 'cpf'=>123456),
        array('nome'=>'Pedro', 'idade'=>22, 'cpf'=>521651),
        array('nome'=>'Andre', 'idade'=>42, 'cpf'=>545125)
    );

    echo json_encode($pessoas);
