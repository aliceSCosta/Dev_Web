<?php

    include('conn.php');

    $sql = "SELECT nome, email, foto FROM pessoas";
    $resultado = $conn->query($sql);