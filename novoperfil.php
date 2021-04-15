<?php
include_once("includes/body.inc.php");
toputili();

?>


<div class="hero-listing set-bg" data-setbg="img/lisboa.jpg">
</div>
<!-- Hero Section End -->
<?php
$id = intval($_GET['id']);
$sql = "select * from perfis where perfilId=" . $id;
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

                    <div class="intro-text mt-5 ">
                        <button  onclick="mostrarFavoritos()" ;>Favoritos</button>
                        <div class="container" id="Favorito">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class='table table-striped table-hover' width="100%">

                                        <tr>
                                            <th>Nome</th>
                                            <th>Ver</th>
                                        </tr>
                                        <?php
                                        $sql = "select * from redes inner join perfis on perfilId=redePerfilId
                                                            inner join estabelecimentos on estabelecimentoId=redeEstabelecimentoId
                                                            where perfilId=$id and redeTipo='favorito'";
                                        $resultRedes = mysqli_query($con, $sql);
                                        ?>

                                        <?php
                                        while ($dadosRedes = mysqli_fetch_array($resultRedes)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $dadosRedes['estabelecimentoNome'] ?></td>
                                                <td>
                                                    <a href="criado.php?id=<?php echo $dadosRedes['estabelecimentoId'] ?>">Ver
                                                </td>
                                                </a>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </table>

                                </div>
                            </div>
                        </div>
                        <button  onclick="mostrarGostos()" ;>Gostos</button>
                        <div class="container" id="Gosto">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class='table table-striped table-hover' width="100%">

                                        <tr>
                                            <th>Nome</th>
                                            <th>Ver</th>
                                        </tr>
                                        <?php
                                        $sql = "select * from redes inner join perfis on perfilId=redePerfilId
                                                            inner join estabelecimentos on estabelecimentoId=redeEstabelecimentoId
                                                            where perfilId=$id and redeTipo='gosto'";
                                        $resultRedes = mysqli_query($con, $sql);
                                        ?>

                                        <?php
                                        while ($dadosRedes = mysqli_fetch_array($resultRedes)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $dadosRedes['estabelecimentoNome'] ?></td>
                                                <td>
                                                    <a href="criado.php?id=<?php echo $dadosRedes['estabelecimentoId'] ?>">Ver
                                                </td>
                                                </a>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <button onclick="mostrar()" ;>Estabelecimentos</button>
                        <div class="container" id="Estabelecimento">
                            <div class="row">
                                <div class="col-lg-12">
                                    <table class='table table-striped table-hover' width="100%">

                                        <tr>
                                            <th>Nome</th>
                                            <th>Ver</th>
                                        </tr>
                                        <?php
                                        $sql = "select * from estabelecimentos inner join perfis on perfilId=estabelecimentoPerfilId
                                                            where perfilId=" . $id;
                                        $resultEstabelecimentos = mysqli_query($con, $sql);
                                        ?>

                                        <?php
                                        while ($dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $dadosEstabelecimentos['estabelecimentoNome'] ?></td>
                                                <td>
                                                    <a href="criado.php?id=<?php echo $dadosEstabelecimentos['estabelecimentoId'] ?>">Ver
                                                </td>
                                                </a>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

                if (isset($_SESSION['id']) == $id) {

                    $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
                    $sql = "select * from perfis where perfilId=" . $_SESSION['id'];
                    $resultPerfis = mysqli_query($con, $sql);
                    $dadosPerfis = mysqli_fetch_array($resultPerfis)

                    ?>
                    <div class="col-lg-4 ">
                        <div class="intro-share">
                            <div class="share-btn">
                                <a href="DefPerfil.php?id=<?php echo $dadosPerfis['perfilId'] ?>">Definições</a>
                                <a href="listaReserva.php?id=<?php echo $dadosPerfis['perfilId'] ?>">Ver
                                    Reservas</a>
                                <a class="mt-2"
                                   href="criarEstabelecimento.php?id=<?php echo $dadosPerfis['perfilId'] ?>">Criar
                                    Estabelecimento</a>

                            </div>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <?php
                }
                ?>
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
                                <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id
                                    vitae
                                    massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus.
                                    Class
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
                                <p>Donec eget efficitur ex. Donec eget dolor vitae eros feugiat tristique id
                                    vitae
                                    massa. Proin vulputate congue rutrum. Fusce lobortis a enim eget tempus.
                                    Class
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
bottom(HOME);
?>
