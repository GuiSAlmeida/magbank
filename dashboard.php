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
            <h4 class="m-0"><?= $_POST['name'] ?></h4>
            <small class="text-muted">ag: 12345 c/c: 34567</small>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <nav class="nav flex-column nav-pills">
                <a href="dashboard.php" class="nav-link active">Minha conta</a>
                <a href="payment.php" class="nav-link">Pagamentos</a>
                <a href="extract.php" class="nav-link">Extrato</a>
            </nav>
        </div>

        <div class="col-12 col-md-9">
            <h2 class="mb-4">Conta corrente</h2>

            <div class="row">
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <div class="account-item">
                        <h5>Saldo em conta corrente</h5>
                        <div class="account-value text-success">
                            <small>R$</small> 3.500<small>,00</small>
                        </div>
                    </div>

                    <div class="account-item">
                        <h5>Cheque especial</h5>
                        <div class="account-info">
                            <p>Limite disponível</p>
                            <p>R$ 5.000,00</p>
                        </div>
                    </div>

                    <a href="extract.php" class="btn btn-secondary">Ver extrato</a>
                </div>
                

                <div class="col-12 col-md-8 col-lg-9">
                    <ul class="nav nav-tabs flex-nowrap" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Últimos Lançamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lançamentos futuros</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table table-sm table-striped table-borderless mt-3">
                                <thead>
                                    <tr>
                                        <th class="text-left">Data</th>
                                        <th class="text-left">Descrição</th>
                                        <th class="text-right">Valor (R$)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>24/03</td>
                                        <td>Saque 24hs 01234</td>
                                        <td class="text-right">300,00</td>
                                    </tr>
                                    <tr>
                                        <td>30/03</td>
                                        <td>Supermercado 01234</td>
                                        <td class="text-right">240,00</td>
                                    </tr>
                                    <tr>
                                        <td>31/05</td>
                                        <td>Farmácia 01234</td>
                                        <td class="text-right">50,00</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <table class="table table-sm table-striped table-borderless mt-3">
                                <thead>
                                    <tr>
                                        <th class="text-left">Data</th>
                                        <th class="text-left">Descrição</th>
                                        <th class="text-right">Valor (R$)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>24/03</td>
                                        <td>Pagamento 01234</td>
                                        <td class="text-right">300,00</td>
                                    </tr>
                                    <tr>
                                        <td>30/03</td>
                                        <td>Conbustível 01234</td>
                                        <td class="text-right">240,00</td>
                                    </tr>
                                    <tr>
                                        <td>31/05</td>
                                        <td>Padaria 01234</td>
                                        <td class="text-right">50,00</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>

<?php include("footer.php") ?>
<?php include("scripts.php") ?>