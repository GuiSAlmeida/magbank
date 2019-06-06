<?php include("header.php") ?>
<section class="login d-flex text-center align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                <form action="dashboard.php" class="login-form">
                    <img src="assets/images/logo-white.png" class="mb-5">

                    <div class="form-group">
                        <label for="account">Número da conta</label>
                        <input type="number" name="account" id="account" class="form-control" required> 
                    </div>

                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="number" name="password" id="password" class="form-control"  required> 
                    </div>

                    <input type="submit" class="btn btn-success" value="Entrar">
                </form>
            
            </div>
        </div>
    </div>
</section>

<?php include("scripts.php") ?>