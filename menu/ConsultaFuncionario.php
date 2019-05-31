<?php include "../includes/head.php"; ?>
<?php include "../includes/header.php"; ?>
<?php include "../functions/functions.php"; ?>

<div class="shadow p-3 mb-5 bg-white rounded">
    <form action="">
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label class="form-control-label" for="formGroupExampleInput">Codigo de Funcionario</label>
                    <input type="text" class="form-control" name="txtCodFunc">
                </div>
                <div class="form-group col-md-3">
                    <label class="form-control-label" for="formGroupExampleInput">Nome de Funcionario</label>
                    <input type="text" class="form-control" name="txtCodFunc">
                </div>
                <div class="form-group col-md-2">
                    <label class="form-control-label" for="formGroupExampleInput">Apelido</label>
                    <input type="text" class="form-control" name="txtCodFunc">
                </div>
            </div>
        </div>
    </form>
    <table class="table">
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

<?php include "../includes/footer.php"; ?>