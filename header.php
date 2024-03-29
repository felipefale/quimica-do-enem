<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Química do ENEM - Aulas Online</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,600|Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="main_header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="./"><img class="img-fluid" src="img/quimica-do-enem.png" title="Quimica do ENEM" alt="Quimica do ENEM"></a>
                </div>
                <div class="col-md-8 d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <nav class="main_header__menu">
                        <ul>
                            <li><a href="sobre.php">Sobre</a></li>
                            <li><a href="ajuda.php">Ajuda</a></li>
                            <li><a href="contato.php">Contato</a></li>
                          <!--   <li class="main_header__dropdown"><a href="">Cursinhos <i
                                        class="fas fa-arrow-circle-down"></i></a>
                                <ul class="main_header__submenu">
                                    <li><a href="">Módulos</a></li>
                                    <li><a href="">Aulas</a></li>
                                    <li><a href="">Exercícios</a></li>
                                    <li><a href="">Provas</a></li>
                                    <li><a href="">Planos de estudo</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </nav>

                    <form class="main_header__form">
                        <input type="search" placeholder="Buscar Aulas">
                    </form>

                    <button type="button" class="btn btn-primary btn-modal" data-toggle="modal"
                        data-target="#exampleModal">
                        Login
                    </button>

                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle" type="button" id="perfil" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Aluno
                      </button>
                      <div class="dropdown-menu" aria-labelledby="perfil">
                        <a class="dropdown-item" href="meu-perfil.php">Meu Perfil</a>
                        <a class="dropdown-item" href="trocar-de-curso.php">Trocar de curso</a>
                        <a class="dropdown-item" href="assinatura.php">Assinatura</a>
                        <a class="dropdown-item" href="enviar-depoimento.php">Envie seu depoimento</a>
                        <a class="dropdown-item" href="#">Sair</a>
                      </div>
                    </div>

                    <a class="btn btn-success" href="assine-ja.php" title="Cadastrar no Química do ENEM online">Cadastrar</a>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>

                                        <label class="sr-only" for="inlineFormInputGroupUsername2">Email</label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">@</div>
                                            </div>
                                            <input type="email" class="form-control" id="inlineFormInputGroupUsername2"
                                                placeholder="Email">
                                        </div>

                                        <label class="sr-only" for="inlineFormInputGroupPassword">Senha</label>
                                        <div class="input-group mb-2 mr-sm-2">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">#</div>
                                            </div>
                                            <input type="password" class="form-control"
                                                id="inlineFormInputGroupPassword" placeholder="Senha">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <a href="assine-ja.php" type="button" class="btn btn-success">Assine já</a>
                                    <a href="esqueci-minha-senha.php" class="btn btn-danger">Esqueci Minha Senha</a>
                                    <button type="button" class="btn btn-dark" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<div class="sub_menu">
    <div class="container">
        <div class="row justify-content-center">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
         
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="cursinhos.php">Cursinhos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="plano-de-estudo.php">Planos de estudo</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="modulos.php">Módulos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="aulas.php">Aulas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="exercicios.php">Exercícios</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="provas.php">Provas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="ranking.php">Rankings</a>
                      </li>
                    </ul>
                </div>
            </nav>   
        </div> 
    </div>
</div>
