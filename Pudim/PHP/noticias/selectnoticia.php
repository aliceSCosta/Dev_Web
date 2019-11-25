<?php

    include("conn.php");

    $sql = "SELECT * FROM noticia";
    $resultado = $conn->query($sql);

    $noticias=array();
    if($resultado->num_rows > 0){
        while($linha=$resultado->fetch_assoc()){
            array_push($noticias, $linha);            
        }
        echo json_encode(utf8_string_array_encode($noticias));
    }

    function utf8_string_array_encode(&$array){
        $func = function(&$value,&$key){
            if(is_string($value)){
                $value = utf8_encode($value);
            }
            if(is_string($key)){
                $key = utf8_encode($key);
            }
            if(is_array($value)){
                utf8_string_array_encode($value);
            }
        };
        array_walk($array,$func);
        return $array;
    }