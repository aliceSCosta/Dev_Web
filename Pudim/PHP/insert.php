<?php

    include('conn.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $foto = basename($_FILES['foto', 'name']);

    if(move_uploaded_file($_FILES['foto', 'tmp_name'] $foto)){
        echo "$foto movida com sucesso";
    }else{
        echo "Não foi possível salvar";
    }

    $sql = "INSERT INTO pessoas (nome, email, senha, foto) VALUES ('$nome', '$email', '$senha', '$foto')";

    $conn->query($sql)