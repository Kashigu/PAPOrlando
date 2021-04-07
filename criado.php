<?php
include_once("includes/body.inc.php");
topocriado();
$id = intval($_GET['id']);
$sql = "Select * from estabelecimentos ";
// inner join categorias
$sql .= " where estabelecimentoId=$id";

$resultEstabelecimentos = mysqli_query($con, $sql);
$dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos)
?>

<div class="hero-listing set-bg" data-setbg="<?php echo $dadosEstabelecimentos['estabelecimentoFundoURL'] ?>">
</div>
<!-- Hero Section End -->

<!-- About Secton Begin -->
<section class="about-section">
    <div class="intro-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-intro">
                        <div class="rating">4.9</div>
                        <div class="intro-text">
                            <h2><?php echo $dadosEstabelecimentos['estabelecimentoNome'] ?></h2>
                            <h4><?php echo $dadosEstabelecimentos['estabelecimentoLocalidade'] ?></h4>
                            <p><?php echo $dadosEstabelecimentos['estabelecimentoSlogan'] ?></p>
                            <div class="open">Abre amanhã às 10 da manhã</div>
                            <div class="closed">Fechado agora</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="intro-share">
                        <div class="share-btn">
                            <a href="galeria.php?id=<?php echo $id ?>">Adicionar Galeria de Fotos</a>
                            <a class="mt-1" href="definicoesEstabelecimento.php?id=<?php echo $id ?>">Definições</a>
                        </div>
                        <div class="share-icon">
                            <!--<a href="#"><i class="fa fa-map-marker"></i></a> -->
                            <!--<a href="#"><i class="fa fa-book"></i></a> -->
                            <!--<a href="#"><i class="fa fa-user-o"></i></a>-->
                            <!-- <a href="#"><i class="fa fa-thumbs-up"></i></a>-->
                            <!--<a href="#"><i class="fa fa-star-o"></i></a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-left">
                        <div class="about-desc">
                            <h4>Sobre o Restaurante</h4>
                            <p> <?php echo $dadosEstabelecimentos['estabelecimentoDescricao'] ?> </p>
                        </div>
                        <div class="about-video1">
                            <!--<img class="tamanho1" src="<?php // echo $dadosEstabelecimentos['estabelecimentoInteriorURL'] ?>" alt="">-->
                            <!--<a href="<?php // echo $dadosEstabelecimentos['estabelecimentoInteriorURL'] ?>" class="img-hover pop-up"><img src="img/zoom.png" alt=""></a>-->
                           <!-- <div id="carouselExampleIndicators" class="tamanho carousel slide"
                                 data-ride="carousel">
                                <ol class=" carousel-indicators">
                                    <li data-target="#carouselExampleIndicators"
                                        data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators"
                                        data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators"
                                        data-slide-to="3"></li>

                                </ol>
                                <div class="carousel-inner">
                                    <?php/*
                                    $sql = "Select * from imagens where imagemEstabelecimentoId=" . $id;
                                    $resultImagens = mysqli_query($con, $sql);
                                    while ($dadosImagens = mysqli_fetch_array($resultImagens)) {
                                        */?>
                                        <div class="carousel-item active" >
                                            <img class=" tamanho"
                                                 src="<?php // echo $dadosImagens['imagemURL'] ?>">

                                        </div>
                                        <?php/*
                                    }
                                    */?>
                                </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next direita" href="#carouselExampleIndicators"
                                       role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon direita" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                            </div>-->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <?php
                                    $controle_ativo = 2;
                                    $sql = "Select * from imagens where imagemEstabelecimentoId=" . $id;
                                    $resultImagens = mysqli_query($con, $sql);
                                    while ($dadosImagens = mysqli_fetch_array($resultImagens)){ ?>
                                        <?php
                                        if ($controle_ativo == 2) { ?>
                                            <div class="carousel-item active ">
                                                <img class=" tamanho "
                                                     src=" <?php echo $dadosImagens['imagemURL'] ?>"
                                                     alt="First slide">
                                            </div> <?php
                                            $controle_ativo = 1;
                                        } else {
                                            ?>
                                            <div class="carousel-item ">
                                            <img class=" tamanho "
                                                 src="<?php echo $dadosImagens['imagemURL'] ?>"
                                                 alt="First slide">
                                            </div><?php
                                        }

                                    }
                                    ?>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators"
                                   role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators"
                                   role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                        <div class="client-reviews mt-3">
                            <h3>Revisão</h3>
                            <div class="reviews-item">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h5>"A Great Place"</h5>
                                <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae
                                    massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class
                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                    himenaeos. </p>
                                <div class="client-text">
                                    <h5>Michael Smith</h5>
                                    <span>March 03, 2019</span>
                                </div>
                            </div>
                            <div class="reviews-item">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <h5>"The best food in town"</h5>
                                <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae
                                    massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class
                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                    himenaeos. </p>
                                <div class="client-text">
                                    <h5>Michael Smith</h5>
                                    <span>March 03, 2019</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-right">
                        <div class="contact-info">
                            <div class="map">
                                <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd"
                                        height="385" style="border:0;" allowfullscreen="">
                                </iframe>
                                <img src="img/pin.png" alt="">
                            </div>
                            <div class="contact-text">
                                <h4>Informação</h4>
                                <span><?php echo $dadosEstabelecimentos['estabelecimentoMorada'] ?></span>
                                <ul>
                                    <li><?php echo $dadosEstabelecimentos['estabelecimentoTelefone'] ?></li>
                                    <li><?php echo $dadosEstabelecimentos['estabelecimentoEmail'] ?></li>
                                </ul>
                            </div>
                        </div>
                        <div class="working-hours">
                            <h4><?php echo $dadosEstabelecimentos['estabelecimentoDescricao2'] ?></h4>
                            <ul>
                                <li>Segunda-Feira<span>08:00 - 22:00</span></li>
                                <li>Terça-Feira<span>08:00 - 22:00</span></li>
                                <li>Quarta-Feira<span>08:00 - 22:00</span></li>
                                <li>Quinta-Feira<span>08:00 - 22:00</span></li>
                                <li>Sexta-Feira <span>08:00 - 22:00</span></li>
                                <li>Sábado<span>08:00 - 22:00</span></li>
                                <li>Domingo<span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
bot(HOME);
?>
