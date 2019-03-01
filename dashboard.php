<?php include("head.php") ?>
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

        <div class="uder-info">
            <h4 class="m-0">Guilherme Almeida</h4>
            <small class="text-muted">ag: 12345 c/c: 34567</small>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <nav class="nav flex-column nav-pills">
                <a href="#" class="nav-link active">Minha conta</a>
                <a href="#" class="nav-link">Pagamentos</a>
                <a href="#" class="nav-link">Extrato</a>
            </nav>
        </div>

        <div class="col-12 col-md-9">
            <h2>Conta corrente</h2>

            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <p><strong>Saldo em conta corrente</strong></p>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Últimos Lançamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lançamentos futuros</a>
                        </li>
                        
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <table class="table table-striped table-borderless">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table class="table table-striped table-borderless">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
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