<?php

    include('selectlista.php');

    if($resultado->num_rows > 0){
        while($linha=$resultado->fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['email'] . "</td>";
                echo "<td>" . '<img src=' . $linha['foto'] . '>' . "</td>";
            echo "</tr>";
        }
    }
?>