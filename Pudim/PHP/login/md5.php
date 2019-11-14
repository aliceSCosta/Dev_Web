<?php

    $palavra = "Morrendodesonod4?";

    $codigo = md5($palavra);

    echo $codigo . "<br>";

    $codigo = hash('sha256', $palavra);