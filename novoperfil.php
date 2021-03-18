<?php
include_once("includes/body.inc.php");
toputili();

?>


<div class="hero-listing set-bg" data-setbg="img/lisboa.jpg">
</div>
<!-- Hero Section End -->
<?php
$id=intval($_GET['id']);
$sql = "select * from perfis where perfilId=".$id;
$resultPerfis = mysqli_query($con, $sql);
$dadosPerfis = mysqli_fetch_array($resultPerfis)
?>
<!-- About Secton Begin -->
<section class="about-section">
    <div class="intro-item">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="about-intro" <?php echo $dadosPerfis['perfilId'] ?>>
                        <img src="<?php echo $dadosPerfis['perfilAvatar'] ?>" class="normal">
                    </div>
                </div>
                <div class="about-intro col-lg-6">
                    <div class="intro-text ">
                        <h2><?php echo $dadosPerfis['perfilNome'] ?></h2>
                        <h4><?php echo $dadosPerfis['perfilLocalidade'] ?></h4>
                    </div>
                    <?php

                    ?>
                    <div class="intro-text mt-5">
                        <div class="closed mt-2">Favoritos</div>
                        <div class="closed mt-2">Gostos</div>
                        <div class="closed mt-2">Estabelecimentos</div>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <div class="intro-share">
                        <div class="share-btn">
                            <a href="DefPerfil.php?id=<?php echo $dadosPerfis['perfilId'] ?>">Definições</a>
                            <a href="listaReserva.php">Ver Reservas</a>
                            <a class="mt-2" href="criarEstabelecimento.php">Criar Estabelecimento</a>
                        </div>
                        <!--<div class="share-icon">
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                            <a href="#"><i class="fa fa-book"></i></a>
                            <a href="#"><i class="fa fa-user-o"></i></a>
                            <a href="#"><i class="fa fa-thumbs-up"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                        </div>-->
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
                        <div class="client-reviews">
                            <h3>Comentários Feitos</h3>
                            <div class="reviews-item">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="single-listing.php"><h5>?A Great Place?</h5></a>
                                <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae
                                    massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class
                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                    himenaeos. </p>
                            </div>
                            <div class="reviews-item">
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <a href="single-listing.php"><h5>?A Great Place?</h5></a>
                                <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id vitae
                                    massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus. Class
                                    aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos
                                    himenaeos. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
bottom();
?>
