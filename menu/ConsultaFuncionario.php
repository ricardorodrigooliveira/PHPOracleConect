<?php include "../includes/head.php"; ?>
<?php include "../includes/header.php"; ?>
<?php include "../functions/functions.php"; ?>

<div class="shadow p-3 mb-5 bg-white rounded">
    <form action="../menu/ConsultaFuncionario.php" method="post">
        <div class="container">
            <div class="form-inline">
                <div class="form-group mx-sm-3 mb-3">
                    <input type="text" class="form-control" placeholder="Codigo" name="txtCodFunc" value="<?php if(isset($txtCdFunc)){echo $txtCdFunc;}?>">
                </div>
                <input type="submit" class="btn btn-primary mb-2" name="Conectar" value="Consultar">
            </div>
            <table class="table table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Apelido</th>
                    </tr>
                </thead>
                <tbody>
                    <thead>
                        <?php consultaFuncionario(); ?>
                    </thead>
                </tbody>
            </table>
        </div>
    </form>
</div>

<?php include "../includes/footer.php"; ?>