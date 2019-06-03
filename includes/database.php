<?php 
    if(!isset($_SESSION)){
        session_start();
    }
?>
<?php

    $user = 'wis';
    $pass = 'WIS';
    $host = '172.16.108.109';
    $sid  = 'WISQAS';
    
    $connect = oci_connect("$user", "$pass", "$host".'/'."$sid");
    
    if (!$connect) {
        $erro = oci_error();
        trigger_error(htmlentities($erro['Erro ao conectar a base de dados '.$sid], ENT_QUOTES), E_USER_ERROR);
    }
?>