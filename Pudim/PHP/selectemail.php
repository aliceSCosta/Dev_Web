<?php

    include("conn.php");

    $sql = "SELECT email FROM pessoas";
    $conn->query($sql);