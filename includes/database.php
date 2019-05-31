
<?php
	if(isset($_POST['Conectar'])){
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];
        $host = $_POST['txtHost'];
        $sid  = $_POST['txtService'];
    }
    
    $connect = oci_connect("$user", "$pass", "$host".'/'."$sid");
    
    if (!$connect) {
        $erro = oci_error();
        trigger_error(htmlentities($erro['Erro ao conectar a base de dados '.$sid], ENT_QUOTES), E_USER_ERROR);
    }else{
        echo "Conexão realizada com sucesso!";
    }
?>