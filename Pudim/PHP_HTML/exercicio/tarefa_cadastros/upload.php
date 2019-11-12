<?php

include('conn.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$foto = basename($_FILES['foto']['name']);

if(move_uploaded_file($_FILES['foto']['tmp_name'], $foto)){
    echo "$foto salvo com sucesso";
}
else{
    echo "Não foi possível salvar";
}

$sql = "INSERT INTO pessoas (nome, email, foto) VALUES ('$nome', '$email', '$foto')";

if($conn->query($sql) == TRUE){
    echo "Dado inserido";
}
else{
    echo "Erro: " . $conn->error;
}