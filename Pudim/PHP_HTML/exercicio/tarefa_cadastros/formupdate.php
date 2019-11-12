<?php

    include('conn.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM pessoas WHERE id='$id'";

    $resultado = $conn->query($sql);

    if($resultado->num_rows > 0){
        $linhas = true;
        $linha = $resultado->fetch_assoc();
    }else{
        $linhas = false;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição</title>
</head>
<body>

    <div>
        <header><h1>Atualização do cadastro</h1></header>
        <main>
            <form action="update.php?id=<?php echo $linha['id'] ?>" method="post" enctype=multipart/form-data>
                <div>
                    <label for="NomeForm">Nome: </label>
                    <input type="text" value="<?php echo $linhas?$linha['nome']:"" ?>" name="nome">
                </div>
                <div>
                    <label for="EmailForm">Email: </label>
                    <input type="email" value="<?php echo $linhas?$linha['email']:"" ?>" name="email">
                </div>
                <div>
                    <label for="FotoForm">Escolha uma foto</label>
                    <input type="file" value="<?php echo $linhas?$linha['file']:"" ?>" name="foto">
                </div>
                <div>
                    <input type="submit" value="Salvar">
                </div>
            </form>
        </main>
        <footer></footer>
    </div>
    
</body>
</html>