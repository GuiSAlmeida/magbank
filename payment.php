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
                <a href="payment.php" class="nav-link active">Pagamentos</a>
                <a href="extract.php" class="nav-link">Extrato</a>
            </nav>
        </div>

        <div class="col-12 col-md-9">
            <h2 class="mb-4">Pagamentos</h2>

            <ul class="nav nav-tabs flex-nowrap" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Boleto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Transferência</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane py-4 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form>
                        <div class="form-group">
                            <label for="barcode">Código de barras</label>
                            <input type="number" class="form-control" id="barcode" placeholder="Insira seu código de barras">
                        </div>

                        <div class="form-group">
                            <div>
                                <label >Forma de pagamento</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="opcao1">
                                <label class="form-check-label" for="inlineRadio1">Débito em conta corrente</label>
                            </div>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="opcao2">
                                <label class="form-check-label" for="inlineRadio2">Cartão de crédito</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-3">Pagar</button>
                    </form>
                </div>

                <div class="tab-pane py-4 fade" id="profile" role="tabpanel" aria-labelledby="home-tab">
                    <form>   
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="bank">Banco</label>
                                    <select class="form-control" id="bank">
                                        <option value="itau">Itaú</option>
                                        <option value="bradesco">Bradesco</option>
                                        <option value="caixa">Caixa Federal</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="#agency">Agência</label>
                                    <input type="number" class="form-control" id="agency">
                                </div>
                            </div>

                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="#cc">Conta Corrente</label>
                                    <input type="number" class="form-control" id="cc">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="#transfer">Valor da transferência</label>
                                    <input type="number" class="form-control" id="transfer">
                                </div>
                            </div>
                            
                            <div class="col-12 col-lg-6">
                                <div class="form-group">
                                    <label for="#identity">Identificação nos extratos</label>
                                    <input type="text" class="form-control" id="identity">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success mt-3">Continuar</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

</div>

<?php include("footer.php") ?>
<?php include("scripts.php") ?>