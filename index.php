<?php include("header.php") ?>
    
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo-white.png" alt="Magbank">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
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
    <div class="container">
        <div class="banner-content d-flex flex-column align-items-center justify-content-center align-items-sm-start flex-sm-row justify-content-sm-start">
            <img class="img-fluid" src="assets/images/magic_pay.png">
            <div class="d-flex flex-column text-center align-items-center justify-content-center mt-3 text-sm-left align-items-sm-left ml-sm-5 justify-content-sm-start">
                <h2 class="display-2 mb-5 mb-sm-3 text-white">Pague suas contas pelo nosso APP</h2>
                <a href="#" class="btn w-75 btn-outline-light btn-lg" data-toggle="modal" data-target="#create-acount">Abra sua conta</a>

            </div>
        </div>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/banner-desktop.jpg" class="banner-desktop w-100 h-100">
                <img src="assets/images/banner-mobile.jpg" class="banner-mobile w-100">
            </div>
            <div class="carousel-item">
                <img src="assets/images/banner-desktop2.jpg" class="banner-desktop w-100">
                <img src="assets/images/banner-mobile2.jpg" class="banner-mobile w-100">
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
                                <h5 class="card-title">Bancos Tradicionais X Bancos Digitais</h5>
                                <p class="card-text">Diga adeus às filas enormes, cobranças indevidas, taxas abusivas, entre outras coisas chatas. O mundo está mudando e com ele o mercado financeiro. Descubra porque abrir sua conta em um Banco Digital pode ser a melhor escolha!</p>
                                <a href="#" class="btn btn-danger">Peça já</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card mb-3">
                            <img src="assets/images/card2.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Principais vantagens de um Banco Digital</h5>
                                <p class="card-text">Praticidade na hora de abrir sua conta digital e efetuar transações, já que tudo é feito pelo celular, além do menor custo das operações e oferta de crédito online são os principais atrativos. Em alguns casos, as contas são inclusive gratuitas – sem taxas ou tarifas.</p>
                                <a href="#" class="btn btn-danger">Peça já</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="card">
                            <img src="assets/images/card3.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Por que escolher um Banco Digital</h5>
                                <p class="card-text">A utilização dos serviços digitais não é mais uma tendência, mas uma realidade. O futuro já chegou ao mercado financeiro. Seja bem-vindo!</p>
                                <a href="#" class="btn btn-danger">Peça já</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <button href="#" type="button" class="btn btn-success btn-lg px-4" data-toggle="modal" data-target="#create-acount">Abra sua conta</button>
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
                    <p>Diga adeus às filas enormes, cobranças indevidas, taxas abusivas, entre outras coisas chatas. O mundo está mudando e com ele o mercado financeiro. Descubra porque abrir sua conta em um Banco Digital pode ser a melhor escolha!<br>
                    Praticidade na hora de abrir sua conta digital e efetuar transações, já que tudo é feito pelo celular, além do menor custo das operações e oferta de crédito online são os principais atrativos. Em alguns casos, as contas são inclusive gratuitas – sem taxas ou tarifas.</p>

                    <ul class="list about-list my-5">
                        <li><i class="fas fa-mobile-alt"></i> Sem fila e sem burocracia</li>
                        <li><i class="fas fa-mobile"></i> Simples e prático</li>
                        <li><i class="fas fa-globe"></i> Abertura de conta 100% online</li>
                        <li><i class="fas fa-shield-alt"></i> Transações mais seguras</li>
                        
                    </ul>

                    <a href="#" class="btn btn-outline-light btn-lg" data-toggle="modal" data-target="#create-acount">Abra sua conta</a>
                   
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
                                        Vou precisar passar por algum tipo de análise?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Fazemos apenas uma análise cadastral. Além disso, nossas únicas restrições são: ter no mínimo 18 anos, ser residente do Brasil e ter um smartphone compatível com os nossos aplicativos para Android (versão 4.4 ou superior) ou iOS (versão 10 ou superior).
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Não tem nenhuma tarifa?
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Você também não tem nenhum custo para ativar e nem para receber um cartão. Nossos clientes poderão usar a rede Banco24Horas para fazer saques. Cada saque terá uma tarifa de R$ 6,50, que é o preço por utilizarmos essa rede externa. Ou seja só paga quem usar e quando usar.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Quais são os benefícios do Cartão?
                                        </button>
                                    </h2>
                                </div>
                            
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Além de um controle simples e transparente dos seus gastos em tempo real (sem nenhuma tarifa ou anuidade), você ainda pode receber descontos ao antecipar suas parcelas. No aplicativo você ainda pode bloquear e desbloquear seu cartão, pedir aumento de limite e mudar sua data de vencimento. Vale conferir cada funcionalidade e as respectivas condições na nossa página principal.
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
                                        Quais os documentos necessários para abertura de conta-corrente?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOneAccount" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionAccount">
                                    <div class="card-body">
                                    Documento de identificação com foto que tenha fé pública (RG, Carteira Nacional de Habilitação - CNH, Passaporte emitido pelo Departamento de Polícia Federal, Carteira de Trabalho – CTPS, Carteira de Identidade Militar).
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseTwoAccount" aria-expanded="false" aria-controls="collapseTwo">
                                        Existe idade mínima para solicitar a abertura de conta-corrente?
                                        </button>
                                    </h2>

                                </div>

                                <div id="collapseTwoAccount" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionAccount">
                                    <div class="card-body">
                                        Não, porém o menor deve ser representado ou assistido pelos pais ou por um tutor nomeado legalmente. Nestes casos, o menor e seu representante legal devem apresentar a documentação necessária para abertura da conta.
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseThreeAccount" aria-expanded="false" aria-controls="collapseThree">
                                        Estrangeiro pode solicitar a abertura de conta-corrente?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseThreeAccount" class="collapse" aria-labelledby="headingThree" data-parent="#accordionAccount">
                                    <div class="card-body">
                                        O cliente Estrangeiro domiciliado no país pode solicitar a abertura da conta, desde que apresente a Cédula de Identidade de Estrangeiro (CIE) ou o protocolo de solicitação do referido documento, dentro do prazo de validade, e os demais documentos necessários à abertura da conta.
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>

                    
                    <div class="tab-pane fade" id="v-pills-token">
                        <h3 class="text-center d-md-none">Token digital</h3>
                        <div class="accordion" id="accordionToken">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseOneToken" aria-expanded="true" aria-controls="collapseOne">
                                        O que é o Token?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOneToken" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionToken">
                                    <div class="card-body">
                                    Token é um dispositivo criptográfico de segurança para computadores, conectado a uma porta USB, destinado a autenticar transações realizadas através da internet pelos clientes PJ e Governo.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseTwoToken" aria-expanded="false" aria-controls="collapseTwo">
                                        O que o cliente deve fazer em caso de roubo ou perda do Token?
                                        </button>
                                    </h2>

                                </div>

                                <div id="collapseTwoToken" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionToken">
                                    <div class="card-body">
                                    1. Revogar o certificado do Token.<br>
                                    2. Solicitar um novo dispositivo. Não é necessário reinstalar o programa, mas é necessário trocar a senha, pois o dispositivo vem, originalmente, com as senhas PIN e PUK de fábrica.<br>
                                    3. Gerar um novo certificado.<br>
                                    4. Solicitar a habilitação do novo certificado nas respectivas empresas ou órgãos.
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseThreeToken" aria-expanded="false" aria-controls="collapseThree">
                                        O Token do Magbank é similar ao token utilizado em outros bancos?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseThreeToken" class="collapse" aria-labelledby="headingThree" data-parent="#accordionToken">
                                    <div class="card-body">
                                    Não. São tecnologias diferentes: o token usado por outros bancos é um gerador de senhas, conhecido como OTP, o do Magbank é um dispositivo criptográfico, que o torna mais seguro.
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-product">
                        <h3 class="text-center d-md-none">Produtos e serviços</h3>
                        <div class="accordion" id="accordionProduct">

                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseOneProduct" aria-expanded="true" aria-controls="collapseOne">
                                        Quais são produtos de aplicação existentes no exterior?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOneProduct" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionProduct">
                                    <div class="card-body">
                                        Poupança, fundos de investimentos, ADR, time deposit.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseTwoProduct" aria-expanded="false" aria-controls="collapseTwo">
                                        Como é calculada a rentabilidade dos fundos de ações?
                                        </button>
                                    </h2>

                                </div>

                                <div id="collapseTwoProduct" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionProduct">
                                    <div class="card-body">
                                        A valorização das cotas é calculada pela variação média das ações que compõem a carteira do fundo de investimento. Conforme instrução CVM 465/08, a valorização das cotas é calculada pelo valor da cota de fechamento do mercado.
                                    </div>
                                </div>
                            </div>


                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseThreeProduct" aria-expanded="false" aria-controls="collapseThree">
                                        Qual o prazo de prescrição de um cheque?
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseThreeProduct" class="collapse" aria-labelledby="headingThree" data-parent="#accordionProduct">
                                    <div class="card-body">
                                    O cheque prescreve 180 dias depois de sua emissão. Deve ser sacado ou depositado em 30 dias, se for na mesma praça em que foi emitido, ou em 60 dias, caso ocorra fora dela.
                                    </div>
                                </div>    
                            </div>
                        </div>
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