<?php include "includes/head.php"; ?>
<?php include "includes/header.php"; ?>

<article id="main" class="py-3">
    <div class="container">
        <div class="login">
            <section class="conectar mb-3">
                <p class="h5">WIS - Logistica</p>
            </section>
            <form action="validaAcesso.php" method="post">
                <fieldset>
                    <div class="shadow p-3 mb-5 bg-white rounded">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label" for="formGroupExampleInput">User</label>
                                <input type="text" class="form-control" name="txtUser">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label" for="formGroupExampleInput">Pass</label>
                                <input type="password" class="form-control" name="txtPass">
                            </div>
                        </div>
                        <!--<div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="form-control-label" for="formGroupExampleInput">Host</label>
                                <input type="text" class="form-control" name="txtHost">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-control-label" for="formGroupExampleInput">Service</label>
                                <input type="text" class="form-control" name="txtService">
                            </div>
                        </div>-->
                    </div>
                <input type="submit" class="col-xl-4 btn btn-block btn-success mx-auto" name="login" value="Entrar">
                </fieldset>
            </form>
        </div>
    </div>
</article>

<?php include "includes/footer.php"; ?>
<?php include "includes/referenceJS.php"; ?>