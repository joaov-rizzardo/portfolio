<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="js/script.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top" id="navegacao">
            <div class="container">
                <a class="navbar-brand" href="index.php">João Victor Domingues</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target1">
                    <i class="fas fa-bars text-white"></i>
                </button>
                <div class="collapse navbar-collapse" id="nav-target1">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="#sobreMim">Sobre mim</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#projetos">Projetos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#competencias">Competências</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link" href="#contato">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section id="inicio">

        <div class="container">
            <h3 >Portfólio</h3>
            <h1>João Victor Domingues</h1>
            <h3>Full-stack developer</h3>
            <a id="vejaMais" href="#sobreMim" class="btn btn-outline-info mt-3">Saiba mais</a>
            <div id="icones-perfil" class="text-center">
                <a href="https://github.com/joaov-rizzardo"><i class="fab fa-github"></i></a>
                <a href="https://www.linkedin.com/in/joaov-rizzardo/"><i class="fab fa-linkedin"></i></a>
                <a href="https://api.whatsapp.com/send?phone=5511956291095"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        
    </section>

    <section id="sobreMim">
        <div class="container">
            <h3 class="mb-5 text-center">Sobre</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="d-flex justify-content-center mb-2">
                        <img class="d-block" id="fotoPerfil" src="img/eu.jpg" alt="">
                    </div>
                </div>

                <div class="col-lg-9 align-self-center borda-left">
                    <h4>João Victor Domingues Rizzardo</h4>
                    <p>Sou fascinado por tecnologia e inovação, e estou sempre em busca de expandir meus conhecimentos. Gosto de utilizar a tecnologia para resolver problemas, criar coisas novas, e para automatizar processos e situações do cotidiano. Assumo responsabilidades e tomo a frente quando necessário.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-6 borda-left borda-right">
                    <h3>Perfil</h3>
                    <h6>Nome:</h6>
                    <p>João Victor Domingues Rizzardo</p>
                    <h6>Nascimento:</h6>
                    <p>24/08/2000</p>
                    <h6>Localização:</h6>
                    <p>Bragança Paulista, São Paulo</p>
                    <h6>E-mail:</h6>
                    <p>jvitor2000@hotmail.com</p>
                </div>

                <div class="col-lg-6 borda-right">
                    <h3>Habilidades</h3>
                    <h6><i style="font-size: 15px;" class="fas fa-star"></i>HTML5</h6>
                    <h6><i style="font-size: 15px;" class="fas fa-star"></i>CSS3</h6>
                    <h6><i style="font-size: 15px;" class="fas fa-star"></i>Bootstrap4</h6>
                    <h6><i style="font-size: 15px;" class="fas fa-star"></i>Javascript</h6>
                    <h6><i style="font-size: 15px;" class="fas fa-star"></i>PHP</h6>
                    <h6><i style="font-size: 15px;" class="fas fa-star"></i>MySQL</h6>
                    <h6><i style="font-size: 15px;" class="fas fa-star"></i>JQuery</h6>
                    
                </div>
            </div>
        </div>
    </section>
    <section id="projetos" class="pb-5">
        <div class="container">
            <h3 class="mb-3">Meus projetos pessoais</h3>
            <div id="carrosel">
                <h3 class="text-warning mb-4">Destaques <i class="fas fa-star"></i></h3>
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="2000">
                            <div class="w-100 d-flex justify-content-center">
                                <img class="w-75 d-block" src="img/biblioteca.png" alt="">
                            </div>
                            <div style="margin: 0 auto;" class="text-center w-75">
                                <a href="">
                                    <h3>Biblioteca virtual</h3>
                                    <p>Projeto desenvolvido em PHP com o objetivo de criar uma biblioteca virtual onde os usuários podem se cadastrar, fazer login, e adicionar e remover livros de suas bibliotecas</p>
                                </a>
                            </div>
                        </div>

                        <div class="carousel-item" data-interval="2000">
                            <div class="w-100 d-flex justify-content-center">
                                <img class="w-75 d-block" src="img/biblioteca2.png" alt="">
                            </div>
                            <div style="margin: 0 auto;" class="text-center w-75">
                                <a href="">
                                    <h3>Biblioteca virtual</h3>
                                    <p>Projeto desenvolvido em PHP com o objetivo de criar uma biblioteca virtual onde os usuários podem se cadastrar, fazer login, e adicionar e remover livros de suas bibliotecas</p>
                                </a>

                            </div>
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                        <i style="color:white;" class="fas fa-angle-left fa-3x" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                        <i style="color:white;" class="fas fa-angle-right fa-3x" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row mt-5 justify-content-around">
                <div class="col-lg-5 text-center projeto-item">
                    <img class="w-100" src="img/finans.png" alt="">
                    <a href="">
                        <h4>Biblioteca virtual</h4>
                        <p>Projeto desenvolvido em PHP com o objetivo de criar uma biblioteca virtual onde os usuários podem se cadastrar, fazer login, e adicionar e remover livros de suas bibliotecas</p>
                    </a>
                </div>

                <div class="col-lg-5 text-center projeto-item">
                    <img class="w-100" src="img/spotify.png" alt="">
                    <a href="">
                        <h4>Biblioteca virtual</h4>
                        <p>Projeto desenvolvido em PHP com o objetivo de criar uma biblioteca virtual onde os usuários podem se cadastrar, fazer login, e adicionar e remover livros de suas bibliotecas</p>
                    </a>
                </div>
            </div>

            <div class="row mt-5 justify-content-around">
                <div class="col-lg-5 text-center projeto-item">
                    <img class="w-100" src="img/finans.png" alt="">
                    <a href="">
                        <h4>Biblioteca virtual</h4>
                        <p>Projeto desenvolvido em PHP com o objetivo de criar uma biblioteca virtual onde os usuários podem se cadastrar, fazer login, e adicionar e remover livros de suas bibliotecas</p>
                    </a>
                </div>

                <div class="col-lg-5 text-center projeto-item">
                    <img class="w-100" src="img/spotify.png" alt="">
                    <a href="">
                        <h4>Biblioteca virtual</h4>
                        <p>Projeto desenvolvido em PHP com o objetivo de criar uma biblioteca virtual onde os usuários podem se cadastrar, fazer login, e adicionar e remover livros de suas bibliotecas</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="pb-3">
        <div class="container">
            <div>
                <h4>Envie uma mensagem</h4>
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control mb-2" type="text" placeholder="Nome">
                        </div>

                        <div class="col-md-6">
                            <input class="form-control mb-2" type="email" placeholder="E-mail">
                        </div>
                    </div>


                    <input class="form-control mb-2" type="text" placeholder="Assunto">
                    <textarea class="form-control mb-2" name="" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                    <button class="btn btn-secondary mb-2" type="submit">Enviar mensagem</button>
                </form>

            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="float-left">
                <h6>&copy; 2021 Copyright - João Victor Domingues</h6>
            </div>

            <div class="float-right">
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-github"></i></a>
                <a href=""><i class="fab fa-linkedin"></i></a>
                <a href=""><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
        <div style="clear: both;"></div>

    </footer>




</body>

</html>