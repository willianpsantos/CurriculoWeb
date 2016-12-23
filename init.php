<?php
    //session_start();

    $_DEBUG_MODE = true;

    $_GLOBAL_APP_NAME = 'curriculo-web';    
    $_GLOBAL_ROOT_URL = '';
    $_GLOBAL_ROOT_PATH = $_SERVER['DOCUMENT_ROOT'];

    if($_DEBUG_MODE == true) {
        $_GLOBAL_ROOT_URL = 'http://localhost:8082/curriculo-web/';        

        if(substr_count($_GLOBAL_ROOT_PATH, $_GLOBAL_APP_NAME) === 0)
            $_GLOBAL_ROOT_PATH =  $_GLOBAL_ROOT_PATH.'/'.$_GLOBAL_APP_NAME;
    } else {
        $_GLOBAL_ROOT_URL = 'http://williansantos.com.br/';
        $_GLOBAL_ROOT_PATH = $_SERVER['DOCUMENT_ROOT'];
    }

    set_include_path($_GLOBAL_ROOT_PATH);
?>