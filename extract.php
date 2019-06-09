<?php include("header.php") ?>
<header class="header">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo-white.png" alt="Magbank">
            </a>

            <form action="#" class="search w-50 d-none d-md-block">
                <div class="container d-flex">
                    <input type="text" placeholder="O que você procura?" class="form-control">
                    <button class="bg-transparent border-0 text-white mx-2"><i class="fas fa-search"></i></button>
                </div>
            </form>

            <a href="index.php" class="btn btn-outline-light">Sair</a>
            
        </div>    
    </nav>
</header>


<form action="#" class="search mt-3 d-md-none">
    <div class="container d-flex">
        <input type="text" placeholder="O que você procura?" class="form-control">
        <button class="bg-transparent border-0 text-primary mx-2"><i class="fas fa-search"></i></button>
    </div>
</form>


<section class="user my-4">
    <div class="container d-flex align-items-center">

        <div class="user-avatar bg-light rounded-circle text-secondary d-flex justify-content-center align-items-center mr-3">
            <i class="fas fa-user"></i>
        </div>

        <div class="user-info">
            <h4 class="m-0">Guilherme Almeida</h4>
            <small class="text-muted">ag: 12345 c/c: 34567</small>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <nav class="nav flex-column nav-pills">
                <a href="dashboard.php" class="nav-link">Minha conta</a>
                <a href="payment.php" class="nav-link">Pagamentos</a>
                <a href="extract.php" class="nav-link active">Extrato</a>
            </nav>
        </div>

        <div class="col-12 col-md-9">
            <h2 class="mb-4">Extrato</h2>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Descrição</th>
                        <th class="text-right">Valor (R$)</th>
                        <th class="text-right">Saldo (R$)</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>17/07</td>
                        <td>Saldo do dia</td>
                        <td class="text-right"><strong></strong></td>
                        <td class="text-right"><strong>2780,00</strong></td>
                    </tr>
                    <tr>
                        <td>20/07</td>
                        <td>Estacionamento 01234</td>
                        <td class="text-right text-danger"><strong>-12,00</strong></td>
                        <td class="text-right"><strong></strong></td>
                    </tr>
                    <tr>
                        <td>20/07</td>
                        <td>Saldo do dia</td>
                        <td class="text-right text-danger"><strong>2768,00</strong></td>
                        <td class="text-right"><strong></strong></td>
                    </tr>
                    <tr>
                        <td>23/07</td>
                        <td>Supermercado 01234</td>
                        <td class="text-right text-danger"><strong>-100,00</strong></td>
                        <td class="text-right"><strong></strong></td>
                    </tr>
                    <tr>
                        <td>23/07</td>
                        <td>Saldo do dia</td>
                        <td class="text-right"><strong></strong></td>
                        <td class="text-right"><strong>2668,00<strong></td>
                    </tr>
                </tbody>
            </table>

            

        </div>

    </div>
</div>

</div>

<?php include("footer.php") ?>
<?php include("scripts.php") ?>