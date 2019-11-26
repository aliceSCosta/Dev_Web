<?php

    include('conn.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = md5($senha);
    $foto = basename($_FILES['foto']['name']);
    $conteudo = $_POST['conteudo'];
    
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $foto)){
        header('Location: login.php');
    }else{
        echo "Não foi possível salvar";
    }

    $sql = "INSERT INTO pessoas (nome, email, conteudo, senha, foto) VALUES ('$nome', '$email', '$conteudo', '$senha', '$foto')";

    $conn->query($sql);