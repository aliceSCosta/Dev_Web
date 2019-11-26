<?php

    session_start();

    include("conn.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM pessoas WHERE email = '$email'";

    $resultado = $conn->query($sql);

    if($resultado->num_rows>0){
        $linha=$resultado->fetch_assoc();
            if($linha["senha"] == md5($senha)){
                $_SESSION["login"] = true;
                header("Location: lista.php");
            }
            else{
                echo "Usuário ou senha inválidos";
            }
    }else{
        echo "Usuário ou senha inválidos";
    }