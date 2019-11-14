<?php
    include('conn.php');

    $sql = "SELECT * FROM pessoas";
    $resultado = $conn->query($sql);