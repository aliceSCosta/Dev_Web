<?php

    include('conn.php');

    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $id = $_GET['id'];

    $sql = "UPDATE pessoas SET nome='$nome', sobrenome='$sobrenome' WHERE id='$id'";

    $conn->query($sql);

    $conn->close();

    header('Location: http://localhost:8080/php/aulasPHP/banco/select.php');
    //header('Location: select.php');