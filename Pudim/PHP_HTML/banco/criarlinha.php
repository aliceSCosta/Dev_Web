<?php
        if($resultado->num_rows > 0){

            while($linha = $resultado->fetch_assoc()){
                echo "<tr>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['sobrenome'] . "</td>";
                    echo "<td>" . $linha['nascimento'] . "</td>";
                    echo "<td><a href='formupdate.php?id=" . $linha['id'] . "'>Editar</a> | ";
                    echo "<a href='delete.php?id=" . $linha['id'] . "'>Apagar</td>";
                echo "</tr>";
            }
        }
        else{
            echo "Nenhum resultado";
        }
    ?>