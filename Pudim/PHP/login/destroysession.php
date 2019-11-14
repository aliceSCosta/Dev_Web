<?php

    session_start();

    session_unset(); //limpa todas as variáveis da sessão

    session_destroy(); //destroi a sessão