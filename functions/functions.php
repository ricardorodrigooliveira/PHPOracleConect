<?php

function consultaFuncionario(){
    global $connect;

    if(isset($_POST['txtCodFunc'])){
        $cdFunc = $_POST['txtCodFunc'];
        
        if($connect){
            echo "conectado";
        }else{
            echo "desconectado";
        }
        
        $query  = "SELECT cd_funcionario, nm_funcionario, nm_abrev_func ";
        $query .= "FROM t_funcionario ";
        $query .= "WHERE cd_funcionario = 1";
        echo $query;
        
        $result = oci_parse($connect, $query);
        oci_execute($result, OCI_DEFAULT);

        while (($row = oci_fetch_assoc($result)) != false) {
            $cdFuncionario = $row['CD_FUNCIONARIO'];
            $nmFuncionario = $row['NM_FUNCIONARIO'];
            $nmAbrevFunc   = $row['NM_ABREV_FUNC'];

            echo "<tr>";
            echo "<th scope='row'>$cdFuncionario</th>";
            echo "<td>$nmFuncionario</td>";
            echo "<td>$nmAbrevFunc</td>";
            echo "</tr>";
        }
        fechaConn($connect, $result);
    }
}

function fechaConn($connect, $result){
    oci_free_statement($result);
    oci_close($connect);
}

function montaMenuPrincipal(){
    $user = 1;
    global $connect;

    $query =  "SELECT DISTINCT cd_menu FROM t_menu_func WHERE cd_funcionario = $user AND tp_aplicacao = 'MNU'";
    
    $result = oci_parse($connect, $query);
    oci_execute($result);

    while($row = oci_fetch_assoc($result)){
        $cdMenu = $row['CD_MENU'];

        echo "<a class='collapse-item' href='utilities-color.html'>$cdMenu</a>";

        header("Location: MenuPrincipal.php");
    }

}

?>