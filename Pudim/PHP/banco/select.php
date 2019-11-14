<?php

include('conn.php');

$sql = "SELECT * FROM Pessoas";
$resultado = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td{
            border: 1px solid salmon;
            border-collapse: collapse;
        }
        td{
            padding: 5px;
        }
        th{
            background-color: salmon;
        }
    </style>
</head>
<body>

    <h1>Pessoas Cadastradas</h1>

    <table>
    <tr>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Nascimento</th>
        <th>Ação</th>
    </tr>
    
    <?php
        include('criarlinha.php');
    ?>

    </table>

</body>
</html>

<?php
$conn->close()
?>