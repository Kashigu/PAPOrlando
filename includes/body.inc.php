<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once("config.inc.php");
$con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
$con->set_charset("utf8");

function toposingle()
{
    ?>

    <!DOCTYPE html>
    <html lang="zxx" xmlns="http://www.w3.org/1999/html">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Yoga Studio Template">
        <meta name="keywords" content="Yoga, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Local Directory | Template</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            #comentar {
                display: none;
            }

        </style>
    </head>

    <body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section listings">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="index.php">Portugal</a></li>
                    <li><a href="procurar.php">Procurar</a></li>
                </ul>
            </nav>
        </div>
        <div class="header-right">
            <div class="user-access">
                <a href="novoperfil.php"><img src="img/perfilfoto.jpg" class="reduzido"></a>
                <div id="mobile-menu-wrap"></div>
            </div>
    </header>

    <?php
}

function top($menu = PORTUGAL)
{

   ?>

    <!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Yoga Studio Template">
        <meta name="keywords" content="Yoga, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> Portugal Local</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> Sem ele tenho o modal com ele não tenho-->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section listings">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li <?php if ($menu == PORTUGAL) echo "class=\"active\""; ?>><a href="index.php">Portugal</a></li>
                    <li <?php if ($menu == PROCURAR) echo "class=\"active\""; ?>><a href="procurar.php">Procurar</a>
                    </li>
                    <!--<li><a href="cafe.html">Cafés</a></li>
                    <li><a href="hoteis.html">Hoteis</a></li>-->
                    <!--<li><a href="criarEstabelecimento.html">Contactos</a></li>-->
                </ul>
            </nav>
            <?php
            session_start();
            if(!isset($_SESSION['id'])){

                ?>
            <div class="header-right">
                <div class="user-access">
                    <a data-toggle="modal" data-target="#registar">Registar/</a>
                    <a data-toggle="modal" data-target="#login">Iniciar Sessão</a>
                    <div id="mobile-menu-wrap"></div>
                </div>
            <?php
            }else{
            ?>
                <?php
                $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
                $sql = "select * from perfis where perfilId=".$_SESSION['id'];
                $resultPerfis = mysqli_query($con, $sql);
                $dadosPerfis = mysqli_fetch_array($resultPerfis)
                ?>
                <div class="header-right">
                    <div class="user-access">
                        <a data-toggle="modal" data-target="#sair">Desconectar</a>
                        <a href="novoperfil.php?id=<?php echo $dadosPerfis['perfilId'] ?>">
                            <img src="<?php echo $dadosPerfis['perfilAvatar'] ?>" class="reduzido"></a>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                <?php
                }
                ?>
    </header>
    <!-- Header End -->



<?php
}

function topocriado()
{
    ?>
    <!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Yoga Studio Template">
        <meta name="keywords" content="Yoga, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Local Directory | Template</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section listings">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="index.php">Portugal</a></li>
                    <li><a href="procurar.php">Procurar</a></li>
                    <li><a href="backoffice.php">Gestão do Site </a></li>
                </ul>
            </nav>

        </div>
        <div>
            <nav class="arrange-select nice-select2 mobile-menu header-right">
                <select name="estabe" id="estabe">
                    <optgroup label="Cafés">
                    </optgroup>
                    <optgroup label="Restaurantes">
                        <option value="ratoeira">Ratoeira</option>
                    </optgroup>
                    <optgroup label="Hotéis">
                    </optgroup>
                </select>
            </nav>
        </div>
        <div class="header-right">
            <div class="user-access">
                <a href="novoperfil.php"><img src="img/perfilfoto.jpg" class="reduzido"></a>
                <div id="mobile-menu-wrap"></div>
            </div>
    </header>

    <?php
}


function toponovo($menu = GESTAO)
{

    ?>
    <!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Yoga Studio Template">
        <meta name="keywords" content="Yoga, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Local Directory | Template</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section listings">
        <div class="container-fluid">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="index.php">Portugal</a></li>
                    <li><a href="procurar.php">Procurar</a></li>
                    <li <?php if ($menu == GESTAO) echo "class=\"active\""; ?>><a href="backoffice.php">Gestão do
                            Site </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header-right">
            <div class="user-access">
                <a href="novoperfil.php"><img src="img/perfilfoto.jpg" class="reduzido"></a>
                <div id="mobile-menu-wrap"></div>
            </div>
    </header>

    <?php
}

function topoadmin($menu = GESTAO)
{

    ?>
    <!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Yoga Studio Template">
        <meta name="keywords" content="Yoga, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Local Directory | Template</title>

        <!-- Google Font -->
        <link href="../https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet"
              href="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section listings">
        <div class="container-fluid">
            <div class="logo">
                <a href="../index.php"><img src="../img/logo.png" alt=""></a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="../index.php">Portugal</a></li>
                    <li><a href="../procurar.php">Procurar</a></li>
                    <li <?php if ($menu == GESTAO) echo "class=\"active\""; ?>><a href="index.php">Gestão do Site </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header-right">
            <div class="user-access">
                <a href="novoperfil.php"><img src="../img/perfilfoto.jpg" class="reduzido"></a>
                <div id="mobile-menu-wrap"></div>
            </div>
    </header>

    <?php
}

function toputili($menu = GESTAO)
{

    ?>
    <!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Yoga Studio Template">
        <meta name="keywords" content="Yoga, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Local Directory | Template</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section listings">
        <div class="container-fluid">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="index.php">Portugal</a></li>
                    <li><a href="procurar.php">Procurar</a></li>
                    <li><a href="backoffice.php">Gestão do Site </a></li>
                </ul>
            </nav>
        </div>
        <?php
        session_start();
        if(!isset($_SESSION['id'])){

        ?>
        <div class="header-right">
            <div class="user-access">
                <a data-toggle="modal" data-target="#registar">Registar/</a>
                <a data-toggle="modal" data-target="#login">Iniciar Sessão</a>
                <div id="mobile-menu-wrap"></div>
            </div>
            <?php
            }else{
            ?>
            <?php
            $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
            $sql = "select * from perfis where perfilId=".$_SESSION['id'];
            $resultPerfis = mysqli_query($con, $sql);
            $dadosPerfis = mysqli_fetch_array($resultPerfis)
            ?>
            <div class="header-right">
                <div class="user-access">
                    <a data-toggle="modal" data-target="#sair">Desconectar</a>
                    <a href="novoperfil.php?id=<?php echo $dadosPerfis['perfilId'] ?>">
                        <img src="<?php echo $dadosPerfis['perfilAvatar'] ?>" class="reduzido"></a>
                    <div id="mobile-menu-wrap"></div>
                </div>
                <?php
                }
                ?>
    </header>

    <?php
}

function topAdmin($menu = GESTAO)
{

    ?>
    <!DOCTYPE html>
<html lang="zxx">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Yoga Studio Template">
        <meta name="keywords" content="Yoga, unica, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Local Directory | Template</title>

        <!-- Google Font -->
        <link href="../https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../css/flaticon.css" type="text/css">
        <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="../css/style.css" type="text/css">
        <link rel="stylesheet"
              href="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section listings">
        <div class="container-fluid">
            <div class="logo">
                <a href="../index.php"><img src="../img/logo.png" alt=""></a>
            </div>
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="../index.php">Portugal</a></li>
                    <li><a href="../procurar.php">Procurar</a></li>
                    <li><a href="index.php">Gestão do Site </a></li>
                </ul>
            </nav>
        </div>
        <div class="header-right">
            <div class="user-access">
                <a href="../novoperfil.php"><img src="../img/perfilfoto.jpg" class="reduzido"></a>
                <div id="mobile-menu-wrap"></div>
            </div>
    </header>

    <?php
}

function bottomsingle()
{
    ?>
    <div class="container" id="comentar">
        <div class="row">
            <div class="col-lg-12">

                <form action="single-listing.php" class="contact-form" id="ratingForm">
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" placeholder="Titulo do Comentário">
                        </div>
                        <div id="status"></div>
                        <fieldset class="ratings ">
                            <legend>Rating:</legend>
                            <input type="radio" id="star5" name="ratings" value="5"/><label for="star5"
                                                                                            title="Muito Bom">5
                                stars</label> <input type="radio" id="star4" name="ratings" value="4"/><label
                                    for="star4"
                                    title="Bom">4
                                stars</label> <input type="radio" id="star3" name="ratings" value="3"/><label
                                    for="star3"
                                    title="Normal">3
                                stars</label> <input type="radio" id="star2" name="ratings" value="2"/><label
                                    for="star2"
                                    title="Mau">2
                                stars</label> <input type="radio" id="star1" name="ratings" value="1"/><label
                                    for="star1"
                                    title="Horrivel">1
                                star</label></fieldset>
                        <div class="clearfix"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea placeholder="Comentário"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 mt-3 centrinho">
                            <button type="submit">Fazer Comentário</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-4 offset-lg-1">
            <div class="intro-share">
                <div class="share-btn">
                    <button id="btnComentar" onclick="mostra();">Fazer Comentário</button>
                </div>
            </div>
        </div>

    </div>


    <?php
}

function bottom($menu)
{
    ?>

    Copyright &copy;
    <script>document.write(new Date().getFullYear());</script>
    All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
        href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <!--   </p></div>
           </div>
           <div class="col-lg-7 text-center text-lg-right order-1 order-lg-2">
               <div class="footer-menu">
                   <a href="#">Home</a>
                   <a href="#">Explore</a>
                   <a href="#">More Cities</a>
                   <a href="#">News</a>
                   <a href="#">Contact</a>
               </div>
           </div>
       </div>
    </div>
    </footer> -->
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/common.js"></script>

    <div class="container">

        <!-- Modal Login-->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="confirmaLogin.php" method="post" class="contact-form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="login">Iniciar Sessão</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row">
                            <div class="modal-body">
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="text" id="utilizador" name="utilizador" placeholder="Nome de Utilizador">
                                </div>
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="password" id="id"  name="id" placeholder="Palavra-Passe">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mt-2">
                            <div class="col-lg-7 meio">
                                <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                            </div>
                            <div class="col-lg-5 meio">
                                <button type="submit" class="btn btn-primary mt-2">Entrar</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Modal Registar-->
        <div class="modal fade" id="registar" tabindex="-1" aria-labelledby="registar" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="novoperfil.php" method="post" class="contact-form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registar">Registar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row">
                            <div class="modal-body">
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="text" placeholder="Nome de Utilizador">
                                </div>
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="text" placeholder="Localidade">
                                </div>
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="password" placeholder="Palavra-Passe">
                                </div>
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="password" placeholder="Confirmar Palavra-Passe">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mt-2">
                            <div class="col-lg-7 meio">
                                <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                            </div>
                            <div class="col-lg-5 meio">
                                <button type="submit" class="btn btn-primary mt-2">Registar</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <!-- Modal Logout-->
        <div class="modal fade" id="sair" tabindex="-1" aria-labelledby="sair" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="Logout.php"  method="post" class="contact-form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sair">Desconectar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row">
                            <div class="modal-body">
                                <div class="col-lg-6 mt-3 meio">
                                    Tem a certeza que deseja Sair ?
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mt-2">
                            <div class="col-lg-7 meio">
                                <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                            </div>
                            <div class="col-lg-5 meio">
                                <button type="submit" class="btn btn-primary mt-2">Sair</button>
                                <input type="hidden" name="id">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function mostra() {
            $('#comentar').toggle();
            $('#btnComentar').hide();
        }
    </script>

    <?php
}


function bottomadmin()
{
    ?>

    Copyright &copy;
    <script>document.write(new Date().getFullYear());</script>
    All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
        href="../https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <!--   </p></div>
           </div>
           <div class="col-lg-7 text-center text-lg-right order-1 order-lg-2">
               <div class="footer-menu">
                   <a href="#">Home</a>
                   <a href="#">Explore</a>
                   <a href="#">More Cities</a>
                   <a href="#">News</a>
                   <a href="#">Contact</a>
               </div>
           </div>
       </div>
    </div>
    </footer> -->
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/common.js"></script>

    <?php
}


function bot($menu = HOME, $id = 0, $categoria = 0, $distrito = 0)
{
    ?>


    Copyright &copy;
    <script>document.write(new Date().getFullYear());</script>
    All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
        href="https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <!--   </p></div>
           </div>
           <div class="col-lg-7 text-center text-lg-right order-1 order-lg-2">
               <div class="footer-menu">
                   <a href="#">Home</a>
                   <a href="#">Explore</a>
                   <a href="#">More Cities</a>
                   <a href="#">News</a>
                   <a href="#">Contact</a>
               </div>
           </div>
       </div>
    </div>
    </footer> -->
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/common.js"></script>


    <div class="container">

        <!-- Modal Login-->
        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="confirmaLogin.php" method="post" class="contact-form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="login">Iniciar Sessão</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row">
                            <div class="modal-body">
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="text" id="utilizador" name="utilizador" placeholder="Nome de Utilizador">
                                </div>
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="password" id="id"  name="id" placeholder="Palavra-Passe">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mt-2">
                            <div class="col-lg-7 meio">
                                <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                            </div>
                            <div class="col-lg-5 meio">
                                <button type="submit" class="btn btn-primary mt-2">Entrar</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Modal Registar-->
        <div class="modal fade" id="registar" tabindex="-1" aria-labelledby="registar" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="novoperfil.php" method="post" class="contact-form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registar">Registar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row">
                            <div class="modal-body">
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="text" placeholder="Nome de Utilizador">
                                </div>
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="email" placeholder="Email">
                                </div>
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="text" placeholder="Localidade">
                                </div>
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="password" placeholder="Palavra-Passe">
                                </div>
                                <div class="col-lg-6 mt-3 meio">
                                    <input type="password" placeholder="Confirmar Palavra-Passe">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mt-2">
                            <div class="col-lg-7 meio">
                                <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                            </div>
                            <div class="col-lg-5 meio">
                                <button type="submit" class="btn btn-primary mt-2">Registar</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <!-- Modal Logout-->
        <div class="modal fade" id="sair" tabindex="-1" aria-labelledby="sair" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="Logout.php"  method="post" class="contact-form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="sair">Desconectar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="row">
                            <div class="modal-body">
                                <div class="col-lg-6 mt-3 meio">
                                    Tem a certeza que deseja Sair ?
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mt-2">
                            <div class="col-lg-7 meio">
                                <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                            </div>
                            <div class="col-lg-5 meio">
                                <button type="submit" class="btn btn-primary mt-2">Sair</button>
                            <input type="hidden" name="id">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('document').ready(function () {
            <?php
            if($menu == ESTABELECIMENTOSP){
            ?>

            $('#search').keyup(function () {
                fillTableEstabelecimentosProcurar(this.value, <?php echo $categoria; ?>,<?php echo $distrito; ?>);
            });
            fillTableEstabelecimentosProcurar('',<?php echo $categoria; ?>,<?php echo $distrito; ?>);

            <?php }
            if ($menu == GALERIA){
            ?>
            $('#search').keyup(function () {
                fillTableImagens(this.value,<?php echo $id ?>);
            });
            fillTableImagens('',<?php echo $id ?>);
            <?php }
            ?>

        })
    </script>
</body>
</html>
    <?php

}

function botAdmin($menu = HOME)
{
    ?>


    Copyright &copy;
    <script>document.write(new Date().getFullYear());</script>
    All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
        href="../https://colorlib.com" target="_blank">Colorlib</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <!--   </p></div>
           </div>
           <div class="col-lg-7 text-center text-lg-right order-1 order-lg-2">
               <div class="footer-menu">
                   <a href="#">Home</a>
                   <a href="#">Explore</a>
                   <a href="#">More Cities</a>
                   <a href="#">News</a>
                   <a href="#">Contact</a>
               </div>
           </div>
       </div>
    </div>
    </footer> -->
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/common.js"></script>

    <script>
        $('document').ready(function () {

            <?php
            if ($menu == DISTRITOS){
            ?>
            $('#search').keyup(function () {
                fillTableDistritos(this.value);
            });
            fillTableDistritos();
            <?php
            }
            if($menu == CATEGORIAS){
            ?>
            $('#search').keyup(function () {
                fillTableCategorias(this.value);
            });
            fillTableCategorias();
            <?php
            }
            if($menu == ESTABELECIMENTOS){
            ?>
            $('#search').keyup(function () {
                fillTableEstabelecimentos(this.value);
            });
            fillTableEstabelecimentos();

            <?php }
            if($menu == UTILIZADOR){
            ?>
            $('#search').keyup(function () {
                fillTableUtilizador(this.value);
            });
            fillTableUtilizador();

            <?php }

            ?>




        })
    </script>
    </body>
    </html>
    <?php

}

?>