<?php
    session_start();

    if(!isset($_SESSION['login'])){
        $_SESSION['login'] = "false";
    }

    if($_SESSION['login'] == "false"){
        $login = "Deslogado";
    }
    else{
        $login = "Logado";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de login</title>
</head>
<body>

    <div>
        <header>
            <h1>Sistema de login</h1>
            <h3>Situação: <?php echo $login ?></h3>
        </header>
        <nav>
            <a href="cadastro.php">Cadastro</a>
            <a href="login.php">Login</a>
            <a href="logout.php">Logout</a>
        </nav>
    </div>
    
</body>
</html>