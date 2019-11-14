<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>

    <div>
        <header><h1>Login</h1></header>
        <main>
            <form action="verifica.php" method="post">
                <div>
                    <label for="username">Usuário: </label>
                    <input type="text" name="user" id="username">
                </div>
                <div>
                    <label for="password">Senha: </label>
                    <input type="text" name="password" id="password">
                </div>
                <div>
                    <input type="submit" value="Login">
                </div>
            </form>
        </main>
    </div>
    
</body>
</html>