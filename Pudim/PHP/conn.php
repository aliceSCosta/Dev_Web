<?php

    $servername = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'newsletter';

    $conn = new mysqli($servername, $usuario, $senha, $banco);

    if($conn->connect_error){
        die('Falha ao conectar' . $conn->connect_error);
    }