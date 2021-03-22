<?php
include_once("includes/body.inc.php");
top(PROCURAR);
$txt = addslashes($_POST['txt']);

/*$sql = "Select * from estabelecimentos inner join estabelecimentocategorias on estabelecimentoId = estabelecimentoCategoriaEstabelecimentoId
        inner join perfis where estabelecimentoNome LIKE '%$txt%'";*/

$sql = "Select * from estabelecimentos inner join categorias
         where estabelecimentoNome LIKE '%$txt%'";

$result = mysqli_query($con, $sql);


?>

<!-- Map Section Begin -->
<div class="map">
    <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98134.94359898944!2d-9.024180455236154!3d39.76846225120994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd220e5ad762d557%3A0x3e2faced1b039ae2!2sM.nha%20Grande!5e0!3m2!1spt-PT!2spt!4v1614251067087!5m2!1spt-PT!2spt"
            height="657" style="border:0;" allowfullscreen="">
    </iframe>
    <!--<img src="img/pin.png" alt="">-->
</div>
<!-- Map Section End -->

<!-- Search Filter Section Begin -->
<section class="search-filter spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="procurar.php" class="filter-search filter-search1">
                    <div class="category-search col-lg-5">
                        <h5>Procurar Categoria</h5>
                        <select name="categoria" class="ca-search">
                            <option value="-1">Escolha a Categoria</option>
                            <?php
                            $sql = "select * from categorias order by categoriaNome";
                            $resultCategorias = mysqli_query($con, $sql);
                            while ($dadosCategorias = mysqli_fetch_array($resultCategorias)) {
                                ?>
                                <option value="<?php echo $dadosCategorias['categoriaId'] ?>">
                                    <?php echo $dadosCategorias['categoriaNome'] ?>
                                </option>
                                <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="location-search col-lg-5">
                        <h5>Tua Localização</h5>
                        <select name="distrito" class="lo-search">
                            <option value="-1">Escolha o Distrito</option>
                            <?php
                            $sql = "select * from distritos order by distritoNome";
                            $resultDistritos = mysqli_query($con, $sql);
                            while ($dadosDistritos = mysqli_fetch_array($resultDistritos)) {
                                ?>
                                <option value="<?php echo $dadosDistritos['distritoId'] ?>">
                                    <?php echo $dadosDistritos['distritoNome'] ?>
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="location-search1 col-lg-10 mt-3 ">
                        <h5>Nome do Estabelecimento</h5>
                        <input class="location-search1 nice-select1" type="text" id="search">
                    </div>
                    <button type="submit">Procurar Agora</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Search Filter Section End -->

<!-- Filter Section Begin -->
<section class="filter-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-left">
                    <!-- <div class="category-filter">
                         <h3>Categorias</h3>
                         <div class="category-option">
                             <div class="co-item">
                                 <input type="radio">
                                 <label class="active">Restaurantes</label>
                             </div>
                             <div class="co-item">
                                 <input type="radio">
                                 <label>Cafés</label>
                             </div>
                             <div class="co-item">
                                 <input type="radio">
                                 <label>Hoteis</label>
                             </div>

                         </div>
                     </div> -->
                    <div class="rating-filter">
                        <h3>Ratings</h3>
                        <div class="rating-option">
                            <div class="ro-item">
                                <input type="radio">
                                <label>5.0</label>
                                <div class="rating-pic">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                            <div class="ro-item">
                                <input type="radio">
                                <label>4.0</label>
                                <div class="rating-pic">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star grey-bg"></i>
                                </div>
                            </div>
                            <div class="ro-item">
                                <input type="radio">
                                <label>3.0</label>
                                <div class="rating-pic">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star grey-bg"></i>
                                    <i class="fa fa-star grey-bg"></i>
                                </div>
                            </div>
                            <div class="ro-item">
                                <input type="radio">
                                <label>2.0</label>
                                <div class="rating-pic">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star grey-bg"></i>
                                    <i class="fa fa-star grey-bg"></i>
                                    <i class="fa fa-star grey-bg"></i>
                                </div>
                            </div>
                            <div class="ro-item">
                                <input type="radio">
                                <label>1.0</label>
                                <div class="rating-pic">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star grey-bg"></i>
                                    <i class="fa fa-star grey-bg"></i>
                                    <i class="fa fa-star grey-bg"></i>
                                    <i class="fa fa-star grey-bg"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="distance-filter">
                        <h3>Distância</h3>
                        <div class="distance-option">
                            <div class="do-item">
                                <input type="radio">
                                <label>0.0-0.3km</label>
                            </div>
                            <div class="do-item">
                                <input type="radio">
                                <label>0.3-0.6km</label>
                            </div>
                            <div class="do-item">
                                <input type="radio">
                                <label>0.6-0.9km</label>
                            </div>
                            <div class="do-item">
                                <input type="radio">
                                <label>1.0-3.0km</label>
                            </div>
                            <div class="do-item">
                                <input type="radio">
                                <label>3.0-10.0km</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="procurar.php" class="arrange-select nice-select2">
                            <span>Ordenar por</span>
                            <select>
                                <option>Relevância</option>
                                <option>Mais Recente</option>
                            </select>
                        </form>
                    </div>
                    <?php
                    $sql = "select * from estabelecimentos inner join categorias ";
                    $resultEstabelecimentos = mysqli_query($con, $sql);
                    while ($dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos)) {
                        ?>
                        <div class="col-lg-4 col-sm-6">
                            <a class="arrange-items"
                               href="single-listing.php?id<?php echo $dadosEstabelecimentos['estabelecimentoId'] ?>">
                                <div class="arrange-pic">
                                    <img class="centrinho"
                                         src="<?php echo $dadosEstabelecimentos['estabelecimentoMiniaturaURL'] ?>"
                                         alt="">
                                    <div class="rating">4.9</div>
                                    <div class="tic-text"><?php echo $dadosEstabelecimentos['categoriaNome'] ?></div>
                                </div>
                                <div class="arrange-text">
                                    <h5><?php echo $dadosEstabelecimentos['estabelecimentoNome'] ?></h5>
                                    <span><?php echo $dadosEstabelecimentos['estabelecimentoMorada'] ?></span>
                                    <p><?php echo $dadosEstabelecimentos['estabelecimentoSlogan'] ?></p>
                                    <div class="open tomorrow">Abre amanhã às 10 da manhã</div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    ?>

                    <div class="col-lg-12 text-right">
                        <div class="pagination-num">
                            <a href="#">01</a>
                            <a href="#">02</a>
                            <a href="#">03</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
bottom(ESTABELECIMENTOSP);
?>
