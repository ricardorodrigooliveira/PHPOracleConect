<?php

function consultaFuncionario(){
    global $connect;
    //echo "<script>alert($connect)</script>";
    $query = "SELECT cd_funcionario, nm_funcionario, nm_abrev_func FROM t_funcionario";

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
    oci_free_statement($result);
    oci_close($connect);

}

?>