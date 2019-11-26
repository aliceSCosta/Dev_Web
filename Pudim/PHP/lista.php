<?php
    include('selectlista.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pessoas Cadastradas</title>
</head>
<body>

    <div>
        <h2>Pessoas Cadastradas</h2>
    </div>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php    
                    include('linhas.php');
                ?>
            </tbody>
        </table>
    </div>

    <a href="formemail.php"><button type='buttom' action="selectemail.php">Email para todos</button></a>
    
    <nav>
        <a href="conteudo.php">Posts</a>
    </nav>
    
</body>
</html>