<?php

//$json = '{"nome": "hello world"}';
$json = file_get_contents("https://api.myjson.com/bins/vt4by");

$dado=json_decode($json);

//var_dump($dado);

echo $dado->nome;

echo "<hr>";

$json=file_get_contents("https://api.myjson.com/bins/viej2");

$dados=json_decode($json);

foreach($dados as $d){
    echo $d->nome . "<br>";
}