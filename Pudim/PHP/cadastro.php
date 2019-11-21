<?php

    include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
    <form action="insert.php" method='post'>
        <div>
            <label for="nome">Nome: </label>
            <input type="text" name='nome' id='nome'>
        </div>
        <div>
            <label for="email">Email: </label>
            <input type="email" name='email' id='email'>
        </div>
        <div>
            <label for="senha">Senha: </label>
            <input type="text" name='senha' id='senha'>
        </div>
        <div>
            <label for="foto">Foto</label>
            <input type="file" name='foto' id='foto'>
        </div>
        <div>
            <button type='submit'>Cadastrar</button>
        </div>
    </form>
</body>
</html>