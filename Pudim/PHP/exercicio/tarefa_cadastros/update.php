<?php

include('conn.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$foto = basename($_FILES['foto']['name']);
$id = $_GET['id'];

move_uploaded_file($_FILES['foto']['tmp_name'], $foto);

$sql = "UPDATE pessoas SET nome='$nome', email='$email', foto='$foto' WHERE id='$id'";

$conn->query($sql);


header('Location: lista.php');