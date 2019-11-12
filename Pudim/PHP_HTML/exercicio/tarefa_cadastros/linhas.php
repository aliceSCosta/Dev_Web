<?php
    if($resultado->num_rows > 0){
        while($linha = $resultado->fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $linha['id'] . "</td>";
                echo "<td>" . $linha['nome'] . "</td>";
                echo "<td>" . $linha['email'] . "</td>";
                echo "<td>" . "<img class= 'img-fluid' src=" . $linha['foto'] .">" . "</td>";
                echo "<td><a href= 'formupdate.php?id=" . $linha['id'] . "'>Editar</a> | ";
                echo "<a href='delete.php?id=" . $linha['id'] . "'>Apagar</a></td>";
                echo "</tr>";
        }
    }

?>