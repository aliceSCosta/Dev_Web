<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "json";

    $conn = new mysqli($servidor, $usuario, $senha, $banco);

    if($conn->connect_error){
        die("Não foi possível conectar ao banco" . $conn->connect_error);
    }