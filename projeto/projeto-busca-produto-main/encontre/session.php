<?php

    session_start();
        $_SESSION = $_POST;// a palavra que veio do form estará armazenada aqui na sessão, para manter dados integros, sempre estará substituindo o valor do método que vai funcionar como uma var
        require_once("conn.php");// aqui está requerindo apenas as palavras passes de conexão de banco de dados(separado para garantir a segurança)
        require_once("resultado.php");// aqui esta requerindo o resultado que vai fazer a busca no banco de dados com a variável salva na sessão e utilizar a conexão que está requerida aqui na sessão também
    session_abort();
        
?>
