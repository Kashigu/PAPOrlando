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

                <?php

                if (!isset($_SESSION['id'])) {

                    ?>

                    <?php
                } else {
                ?>
                <?php
                $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
                $sql = "select * from perfis where perfilId=" . $_SESSION['id'];
                $resultPerfis = mysqli_query($con, $sql);
                $dadosPerfis = mysqli_fetch_array($resultPerfis);

                ?>
                <div class="col-lg-4 offset-lg-1">
                    <div class="intro-share">
                        <div class="share-btn">
                            <a href="reserva.php?id=<?php echo $id ?>">Fazer Reserva</a>
                        </div>
                        <div class="share-icon">
                            <a id="gosto" onclick="gosto(<?php echo $id ?>)" align="left" title="Gosto">
                                <?php
                                // verifica se o utilizador gosta da foto
                                $sql = "select * from redes where redePerfilId=" . $_SESSION['id'] . " and redeEstabelecimentoId=" . $id . " and redeTipo='gosto'";
                                mysqli_query($con, $sql);
                                if (mysqli_affected_rows($con) > 0) {
                                    ?>
                                    <i class="fa fa-thumbs-up" style="color:blue"></i>
                                    <?php
                                } else {
                                    ?>
                                    <i class="fa fa-thumbs-up"></i>
                                    <?php
                                }
                                ?>
                            </a>
                            <a id="favorito" onclick="favorito(<?php echo $id ?>)" align="left" title="Favorito">
                                <?php
                                // verifica se o utilizador gosta da foto
                                $sql = "select * from redes where redePerfilId=" . $_SESSION['id'] . " and redeEstabelecimentoId=" . $id . " and redeTipo='favorito'";
                                mysqli_query($con, $sql);
                                if (mysqli_affected_rows($con) > 0) {
                                    ?>
                                    <i class="fa fa-star-o" style="color:deeppink"></i>
                                    <?php
                                } else {
                                    ?>
                                    <i class="fa fa-star-o"></i>
                                    <?php
                                }
                                ?>
                            </a>
                        </div>
                        <div class="bg-primary" id="status" style="margin-left: 180px">
                            <fieldset class="ratings">
                                <legend>Rating:</legend>
                                <?php
                                $sql = "select ratingValor from ratings inner join redes on redeId = ratingRedeId
                                        where redePerfilId =" . $_SESSION['id'] . " and redeEstabelecimentoId=" . $id;
                                $result = mysqli_query($con, $sql);
                                $dados = mysqli_fetch_array($result);
                                ?>
                                <input type="radio" <?php if ($dados[0] == 5) echo " checked " ?> id="star5"
                                       name="ratings" value="5" onclick="rating(<?php echo $id ?>,5) ">
                                <label for="star5" title="Muito Bom">5 stars</label>
                                <input type="radio" <?php if ($dados[0] == 4) echo " checked " ?> id="star4"
                                       name="ratings" value="4" onclick="rating(<?php echo $id ?>,4) ">
                                <label for="star4" title="Bom">4 stars</label>
                                <input type="radio" <?php if ($dados[0] == 3) echo " checked " ?> id="star3"
                                       name="ratings" value="3" onclick="rating(<?php echo $id ?>,3) ">
                                <label for="star3" title="Neutro">3 stars</label>
                                <input type="radio" <?php if ($dados[0] == 2) echo " checked " ?> id="star2"
                                       name="ratings" value="2" onclick="rating(<?php echo $id ?>,2) ">
                                <label for="star2" title="Mau">2 stars</label>
                                <input type="radio" <?php if ($dados[0] == 1) echo " checked " ?> id="star1"
                                       name="ratings" value="1" onclick="rating(<?php echo $id ?>,1) ">
                                <label for="star1" title="Horrivel">1 star</label>
                            </fieldset>


                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
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
                        <div class="about-desc">
                            <h4>Sobre o Estabelecimento</h4>
                            <p><?php echo $dadosEstabelecimentos['estabelecimentoDescricao'] ?></p>
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
                            <p><?php echo $dadosEstabelecimentos['estabelecimentoDescricao2'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php

if (!isset($_SESSION['id'])) {

    ?>

    <?php
} else {
    ?>
    <?php
    $con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
    $sql = "select * from perfis where perfilId=" . $_SESSION['id'];
    $resultPerfis = mysqli_query($con, $sql);
    $dadosPerfis = mysqli_fetch_array($resultPerfis);

    ?>
    <div class="container" id="comentar">
        <div class="row">
            <div class="col-lg-12 contact-form">

                <!--<form method="post" class="" id="ratingForm">-->

                <legend>Comentário:</legend>
                <div class="row">
                    <div class="col-lg-12">
                        <textarea id="comentarioTexto" name="reviewTexto" placeholder="Comentário"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-3 centrinho">
                        <button type="button" onclick="comentario(<?php echo $id ?>)">Fazer Comentário</button>
                    </div>
                </div>
                <!--</form>-->
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
?>




<?php

bot(SINGLE, $id);
?>
