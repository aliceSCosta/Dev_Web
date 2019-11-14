<?php

    include('conn.php');

    $id = $_GET;

    $sql = "SELECT FROM pessoas WHERE id='$id'";

    $conn->query($sql);

    $conn->close();

    header('Location: lista.php');