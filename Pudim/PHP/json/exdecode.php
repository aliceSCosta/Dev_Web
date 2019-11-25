<?php
    $json = file_get_contents("https://api.myjson.com/bins/vt4by");

    $titulo=json_decode($json);

    $json=file_get_contents("https://api.myjson.com/bins/viej2");

    $dados=json_decode($json);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div>
        <header>
            <h1>Título do Site <?php echo $titulo->nome ?></h1>
        </header>
        <main>
            <table>
                <tr>
                    <th>id</th>
                    <th>nome</th>
                </tr>
                <?php
                    foreach($dados as $dado){
                        echo "<tr>";
                        echo "<td>" . $dado->id ."</td>";
                        echo "<td>" . $dado->nome ."</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </main>
    </div>
    
</body>
</html>