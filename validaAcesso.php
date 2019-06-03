<?php include "includes/database.php"; ?>
<?php //session_start(); ?>

<?php
    if(isset($_POST['login'])){
        global $connect;
        
        $user = $_POST['txtUser'];
        $pass = $_POST['txtPass'];

        $query = "SELECT cd_funcionario, cd_opid FROM t_funcionario where cd_funcionario = $user";
        $result = oci_parse($connect, $query);
        oci_execute($result);
        echo $result;

        while($row = oci_fetch_assoc($result)){
            $dbPass = $row['CD_OPID'];
            $dbUser = $row['CD_FUNCIONARIO'];
            echo $dbUser.' - '.$dbPass;
        }
        if($connect){
            echo 'conectado';
            echo $user;
            echo $pass;
            echo $dbUser;
            echo $dbPass;
        }else{
            echo 'desconectado';
        }
        
        if($pass == $dbPass){
            $_SESSION['CD_OPID'] = $dbPass;
            $_SESSION['CD_FUNCIONARIO'] = $dbUser;

            header('Location: menu/MenuPrincipal.php');
        }else{
            header('Location: index.php');
        }
    }
?>