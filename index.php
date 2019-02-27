<?php include("head.php") ?>
    
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo-white.png" alt="Magbank">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#cartao">Cartão</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#quem-somos">Quem somos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                </ul>
                
                <div class="btn-group">
                    <a href="login.php" class="btn btn-outline-light">Acessar minha conta</a>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                        abra sua conta
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#create-acount">Pessoa física</a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#create-acount">Pessoa jurídica</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </nav>
</header>

<section class="banner">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/banner-desktop.jpg" class="banner-desktop w-100">
                <img src="assets/images/banner-mobile.jpg" class="banner-mobile w-100">
            </div>
            <div class="carousel-item">
                <img src="assets/images/banner-desktop.jpg" class="banner-desktop w-100">
                <img src="assets/images/banner-mobile.jpg" class="banner-mobile w-100">
            </div>
        </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>

</section>

<section class="credit-card py-5" id="cartao">
    <div class="container">
        <div class="row align-items-md-center">
            <div class="col-12 col-md-6 col-lg-7">
                <h2 class="display-1 text-primary mb-4">Cartão de crédito</h2>

                <ul class="credit-card-list list mb-md-5">
                    <li><i class="fas fa-credit-card"></i>Crédito pessoal</li>
                    <li><i class="fas fa-mobile"></i>APP</li>
                    <li><i class="fas fa-shopping-cart"></i>Pagamento online</li>
                    <li><i class="fas fa-wallet"></i>Carteira digital</li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img class="img-fluid my-5 mt-md-0" src="assets/images/card.png">
            </div>
        </div>
        
        <section class="cards py-5">
            <div class="container">
                <div class="row d-flex justify-content-md-between">
                    <div class="col-12 col-md-4">
                        <div class="card mb-3">
                            <img src="assets/images/card1.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt arcu vel arcu fermentum, eget accumsan dolor dignissim. Nam eget quam semper, varius ligula sed, auctor augue.</p>
                                <a href="#" class="btn btn-danger">Peça já</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card mb-3">
                            <img src="assets/images/card2.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt arcu vel arcu fermentum, eget accumsan dolor dignissim. Nam eget quam semper, varius ligula sed, auctor augue.</p>
                                <a href="#" class="btn btn-danger">Peça já</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card">
                            <img src="assets/images/card3.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Lorem ipsum dolor sit</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt arcu vel arcu fermentum, eget accumsan dolor dignissim. Nam eget quam semper, varius ligula sed, auctor augue.</p>
                                <a href="#" class="btn btn-danger">Peça já</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button href="#" type="button" class="btn btn-success btn-lg px-4">Abra sua conta</button>
            </div>
        </section>
    </div>
</section>

<section class="about" id="quem-somos">
    <div class="container">
        <div class="row d-flex justify-content-md-end">
            <div class="col-12 col-md-7">
                <div class="py-5 text-white">
                    
                    <h2 class="display-1 mb-5">Já nascemos digital</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tincidunt arcu vel arcu fermentum, eget accumsan dolor dignissim. Nam eget quam semper, varius ligula sed, auctor augue. Maecenas et porta magna. Nulla mattis tortor vitae metus vestibulum scelerisque. Ut mollis a nisl vel suscipit. Curabitur scelerisque placerat ultrices. Proin purus ante, congue vel arcu ac, porta condimentum mauris. Maecenas massa orci, fringilla eget fermentum nec, dignissim nec diam.</p>

                    <ul class="list about-list my-5">
                        <li><i class="fas fa-mobile-alt"></i> Sem fila e sem burocracia</li>
                        <li><i class="fas fa-mobile"></i> Simple e prático</li>
                        <li><i class="fas fa-globe"></i> Abertura de conta 100% online</li>
                        <li><i class="fas fa-shield-alt"></i> Transações mais seguras</li>
                        
                    </ul>

                    <a href="#" class="btn btn-outline-light btn-lg">Abra sua conta</a>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq py-5 text-white" id="faq">
    <div class="container">
        <h2 class="display-1 text-center mb-5">Duvidas frequentes</h2>

        <div class="row align-items-md-center">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="nav justify-content-between nav-pills flex-md-column mb-3">
                    <a class="nav-link active d-flex align-items-center my-md-2" data-toggle="pill" href="#v-pills-card">
                        <i class="fas fa-credit-card"></i>
                        <span class="text-left d-none d-md-inline-block ml-2">Cartão de crédito e débito</span>
                    </a>
                    <a class="nav-link d-flex align-items-center my-md-2" data-toggle="pill" href="#v-pills-account">
                        <i class="fas fa-wallet"></i>
                        <span class="text-left d-none d-md-inline-block ml-2">Conta e abertura</span>
                    </a>
                    <a class="nav-link d-flex align-items-center my-md-2" data-toggle="pill" href="#v-pills-token">
                        <i class="fas fa-shield-alt"></i>
                        <span class="text-left d-none d-md-inline-block ml-2">Token digital</span>
                    </a>
                    <a class="nav-link d-flex align-items-center my-md-2" data-toggle="pill" href="#v-pills-product">
                        <i class="fas fa-user-tie"></i>
                        <span class="text-left d-none d-md-inline-block ml-2">Produtos e serviços</span>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-7">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="v-pills-card">
                        <h3 class="text-center d-md-none">Cartão de crédito e débito</h3>

                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                    </button>
                                </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                                </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Collapsible Group Item #2
                                            </button>
                                        </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-account">
                        <h3 class="text-center d-md-none">Conta e abertura</h3>

                        <div class="accordion" id="accordionAccount">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseOneAccount" aria-expanded="true" aria-controls="collapseOne">
                                        Collapsible Group Item #1
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOneAccount" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionAccount">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseTwoAccount" aria-expanded="false" aria-controls="collapseTwo">
                                        Collapsible Group Item #2
                                        </button>
                                    </h2>

                                </div>

                                <div id="collapseTwoAccount" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionAccount">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseThreeAccount" aria-expanded="false" aria-controls="collapseThree">
                                        Collapsible Group Item #3
                                        </button>
                                    </h2>
                            </div>
                            <div id="collapseThreeAccount" class="collapse" aria-labelledby="headingThree" data-parent="#accordionAccount">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-token">
                        <h3 class="text-center d-md-none">Token digital</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim vero sequi provident, nam autem illo, et sed beatae quia doloribus dolorum laborum assumenda sapiente dignissimos voluptate non, animi alias veniam.</p>
                    </div>

                    <div class="tab-pane fade" id="v-pills-product">
                        <h3 class="text-center d-md-none">Produtos e serviços</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim vero sequi provident, nam autem illo, et sed beatae quia doloribus dolorum laborum assumenda sapiente dignissimos voluptate non, animi alias veniam.</p>
                    </div>
                </div>

                
            </div>
        </div>

    </div>
</section>

<div class="modal fade" id="create-acount" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Abra sua conta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group text-center">
                <label for="name" class="font-weight-bold">Seu nome</label>
                <input type="text" class="form-control" id="name" placeholder="Digite seu nome...">
            </div>
            <div class="form-group text-center">
                <label for="email" class="font-weight-bold">Seu e-mail</label>
                <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail...">
            </div>
            <div class="form-group text-center">
                <label for="city" class="font-weight-bold">Sua cidade</label>
                <select class="form-control" id="city">
                    <option></option>
                    <option>Florianópolis</option>
                    <option>Porto Alegre</option>
                    <option>São Paulo</option>
                    <option>Rio de Janeiro</option>
                </select>
                
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="terms">
                <label class="form-check-label" for="terms">Eu li e concordo com os termos de uso</label>
            </div>
            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Criar conta</button>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php") ?>
<?php include("scripts.php") ?>