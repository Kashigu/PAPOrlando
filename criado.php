<?php
include_once("includes/body.inc.php");
toposingle(SINGLE);
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
                        <?php
                        $sql = "select estabelecimentos.*, categoriaNome, ifnull(tabela.medRating,' NR') as rating
                                        from estabelecimentos left join categorias
                                                                on categoriaId=estabelecimentoCategoriaId left join 
                                        (
                                            select redeEstabelecimentoId, round(avg(ratingValor),1) as medRating
                                            from redes inner join ratings on redeId=ratingRedeId
                                            group by 1
                                            ) as tabela
                                        on estabelecimentoId=redeEstabelecimentoId
                                         where estabelecimentoId=$id";
                        $rating = mysqli_query($con, $sql);
                        $dadosRating = mysqli_fetch_array($rating);
                        ?>
                        <div class="rating"><?php echo $dadosRating['rating'] ?></div>
                        <div class="intro-text">
                            <h2><?php echo $dadosEstabelecimentos['estabelecimentoNome'] ?></h2>
                            <h4><?php echo $dadosEstabelecimentos['estabelecimentoLocalidade'] ?></h4>
                            <p><?php echo $dadosEstabelecimentos['estabelecimentoSlogan'] ?></p>
                            <?php
                            $hora = date("H", time()) + 1;
                            $hora .= ':';
                            $hora .= date("i", time());
                            $hora .= ':00';
                            $hora;
                            //echo ($hora>=$dadosEstabelecimentos['estabelecimentoHoraInicial'] ?'s':'n');
                            if ($hora >= $dadosEstabelecimentos['estabelecimentoHoraInicial'] and $hora <= $dadosEstabelecimentos['estabelecimentoHoraFinal']) { ?>
                                <div class="closed">Aberto desde
                                    as <?php echo $dadosEstabelecimentos['estabelecimentoHoraInicial'] ?> até às <?php echo $dadosEstabelecimentos['estabelecimentoHoraFinal'] ?></div>
                                <?php
                            } else {
                                ?>
                                <div class="open">Fechado agora</div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="intro-share">
                        <div class="share-btn">
                            <a href="galeria.php?id=<?php echo $id ?>">Adicionar uma Galeria de Fotos</a>
                            <a class="mt-1" href="definicoesEstabelecimento.php?id=<?php echo $id ?>"
                               style="margin-left:7px">Definições</a>
                            <a class="mt-1" href="listaReservaAdmin.php?id=<?php echo $id ?>">Ver Reservas</a>
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
                            <h4>Sobre o Estabelecimento</h4>
                            <p> <?php echo $dadosEstabelecimentos['estabelecimentoDescricao'] ?> </p>
                        </div>
                        <div class="about-video1">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">
                                    <?php
                                    $controle_ativo = 2;
                                    $sql = "Select * from imagens where imagemEstabelecimentoId=" . $id;
                                    $resultImagens = mysqli_query($con, $sql);
                                    while ($dadosImagens = mysqli_fetch_array($resultImagens)) { ?>
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
                                <div class="col-lg-12" id="tableContent"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-right">
                        <div class="contact-info">
                            <div class="map">
                                <?php
                                echo $dadosEstabelecimentos['estabelecimentoPosicao']
                                ?>
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
                            <h4>Horas de Trabalho:</h4>
                            <p> <?php echo $dadosEstabelecimentos['estabelecimentoDescricao2'] ?> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
bot(SINGLE, $id);
?>
