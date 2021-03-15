<?php
include_once("includes/body.inc.php");
top(PORTUGAL);

?>
    <section class="hero-section set-bg" data-setbg="img/lisboa.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-text">

                        <h1>Portugal</h1>
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
                            <p></p>
                            <div class="location-search1 col-lg-10 mt-3">
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
    <!-- Hero Section End -->

    <!-- Trending Restaurant Section Begin -->
    <!--<section class="trending-restaurant spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Top trending for your city</h2>
                        <p>Explore some of the best places in the world</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="trend-item">
                        <div class="trend-pic">
                            <img src="img/trending/trending-1.jpg" alt="">
                            <div class="rating">4.9</div>
                        </div>
                        <div class="trend-text">
                            <h4>New Place Restaurant</h4>
                            <span>Main Road , No 25/11</span>
                            <p>Fusce urna quam, euismod sit amet mollis quis.</p>
                            <div class="closed">Closed Now</div>
                            <div class="open">Opens Tomorow at 10am</div>
                        </div>
                        <div class="tic-text">Restaurants</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="trend-item nightlife">
                        <div class="trend-pic">
                            <img src="img/trending/trending-2.jpg" alt="">
                            <div class="rating">4.9</div>
                        </div>
                        <div class="trend-text">
                            <h4>Palace Club</h4>
                            <span>Parker Street, No 234/40</span>
                            <p>Fusce urna quam, euismod sit amet mollis quis.</p>
                            <div class="open">Open Until 3am</div>
                        </div>
                        <div class="tic-text">Nightlife</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="trend-item hotels">
                        <div class="trend-pic">
                            <img src="img/trending/trending-3.jpg" alt="">
                            <div class="rating">4.6</div>
                        </div>
                        <div class="trend-text">
                            <h4>Grand Hotel</h4>
                            <span>Main Road , No 25/11</span>
                            <p>Morbi id dictum quam, ut commodo lorem.</p>
                            <div class="closed">Closed Now</div>
                            <div class="open">Opens Tomorow at 10am</div>
                        </div>
                        <div class="tic-text">Hotels</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="trend-item events">
                        <div class="trend-pic">
                            <img src="img/trending/trending-4.jpg" alt="">
                            <div class="rating">5.0</div>
                        </div>
                        <div class="trend-text">
                            <h4>Opera Concert</h4>
                            <span>Parker Street, No 234/40</span>
                            <p>Aliquam erat volutpat. Morbi id dictum.</p>
                            <div class="open">Open Until 3am</div>
                        </div>
                        <div class="tic-text">Events</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Restaurant Section End -->

    <!-- Categories Section Begin -->
    <p></p>

    <section class="categories-section spad">
        <div class="container-fluid">
            <div class="categories-left">
                <div class="row">

                    <?php
                    $sql = "select * from categorias order by categoriaNome";
                    $resultCategorias = mysqli_query($con, $sql);
                    while ($dadosCategorias = mysqli_fetch_array($resultCategorias)) {
                        ?>
                        <div class="col-md-12">
                            <div class="categories-item set-bg" <?php echo $dadosCategorias['categoriaId'] ?>>


                                <a <?php echo $dadosCategorias['categoriaImagemURL'] ?> ></a>
                                <div class="categories-text">
                                    <h4><?php echo $dadosCategorias['categoriaNome'] ?></h4>
                                    <p>2373 Listados</p>
                                    <a href="procurar.php">Ver Todos</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="col-md-12">
                        <div class="categories-item set-bg" data-setbg="img/categories/cat-4.jpg">
                            <a href="img/categories/cat-4.jpg" class="img-hover pop-up"><img src="img/zoom.png" alt=""></a>
                            <div class="categories-text">
                                <h4>Categorias</h4>
                                <p>2373 Listados</p>
                                <a href="procurar.php">Ver Todos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="categories-right">
                <div class="row">
                    <!--<div class="col-md-6">
                        <div class="categories-item set-bg" data-setbg="img/categories/cat-2.jpg">
                            <a href="img/categories/cat-2.jpg" class="img-hover pop-up"><img src="img/zoom.png" alt=""></a>
                            <div class="categories-text">
                                <h4>Nightlife & Clubs</h4>
                                <p>2373 Listings</p>
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-md-12">
                        <div class="categories-item set-bg" <?php echo $dadosCategorias['categoriaId'] ?>>


                            <a <?php echo $dadosCategorias['categoriaImagemURL'] ?> ></a>
                            <div class="categories-text">
                                <h4><?php echo $dadosCategorias['categoriaNome'] ?></h4>
                                <p>2373 Listados</p>
                                <a href="procurar.php">Ver Todos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="categories-item set-bg" data-setbg="img/categories/hoteis.jpg">
                            <a href="img/categories/hoteis.jpg" class="img-hover pop-up"><img src="img/zoom.png" alt=""></a>
                            <div class="categories-text">
                                <h4>Hoteis</h4>
                                <p>2373 Listados</p>
                                <a href="procurar.php">Ver Todos</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-6">
                         <div class="categories-item set-bg" data-setbg="img/categories/cat-5.jpg">
                             <a href="img/categories/cat-5.jpg" class="img-hover pop-up"><img src="img/zoom.png" alt=""></a>
                             <div class="categories-text">
                                 <h4>Clubs & Pubs</h4>
                                 <p>2373 Listings</p>
                                 <a href="#">View All</a>
                             </div>
                         </div>
                     </div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Testimonial Section Begin -->
    <!--<section class="testimonial-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="testimonial-item owl-carousel">
                        <div class="single-testimonial-item">
                            <img src="img/testimonial-1.png" alt="">
                            <p>Fusce urna quam, euismod sit amet mollis quis. Fusce urna quam, euismod sit amet mollis
                                quis, vestibulum quis velit. Vestibulum malesuada aliquet libero viverra cursus. Aliquam
                                erat volutpat. Morbi id dictum quam, ut commodo lorem. In at nisi nec arcu porttitor
                                aliquet vitae at dui. Sed sollicitudin nulla non leo viverra.</p>
                            <h4>Michael Smith</h4>
                            <span>CEO Company</span>
                        </div>
                        <div class="single-testimonial-item">
                            <img src="img/testimonial-1.png" alt="">
                            <p>Fusce urna quam, euismod sit amet mollis quis. Fusce urna quam, euismod sit amet mollis
                                quis, vestibulum quis velit. Vestibulum malesuada aliquet libero viverra cursus. Aliquam
                                erat volutpat. Morbi id dictum quam, ut commodo lorem. In at nisi nec arcu porttitor
                                aliquet vitae at dui. Sed sollicitudin nulla non leo viverra.</p>
                            <h4>Michael Smith</h4>
                            <span>CEO Company</span>
                        </div>
                        <div class="single-testimonial-item">
                            <img src="img/testimonial-1.png" alt="">
                            <p>Fusce urna quam, euismod sit amet mollis quis. Fusce urna quam, euismod sit amet mollis
                                quis, vestibulum quis velit. Vestibulum malesuada aliquet libero viverra cursus. Aliquam
                                erat volutpat. Morbi id dictum quam, ut commodo lorem. In at nisi nec arcu porttitor
                                aliquet vitae at dui. Sed sollicitudin nulla non leo viverra.</p>
                            <h4>Michael Smith</h4>
                            <span>CEO Company</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="bg-img">
                <img src="img/testimonial-bg.png" alt="">
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- How It Works Section Begin -->
    <!--<section class="work-section set-bg" data-setbg="img/line-bg.jpg">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <div class="section-title">
                         <h2>How it works</h2>
                         <p>Explore some of the best places in the world</p>
                     </div>
                 </div>
             </div>
             <div class="row">
                 <div class="col-lg-4">
                     <div class="single-work-item">
                         <div class="number">01.</div>
                         <div class="work-text">
                             <h4>Search the portal</h4>
                             <p>Fusce urna quam, euismod sit amet mollis quis.Aliquam erat volutpat. Morbi id dictum quam, ut.</p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="single-work-item">
                         <div class="number">02.</div>
                         <div class="work-text">
                             <h4>Choose the one 4u</h4>
                             <p>Euismod sit amet mollis quis. Ali-quam erat volutpat. Morbi id dictum quam, ut commodo lorem. </p>
                         </div>
                     </div>
                 </div>
                 <div class="col-lg-4">
                     <div class="single-work-item">
                         <div class="number">03.</div>
                         <div class="work-text">
                             <h4>Book it!</h4>
                             <p>Euismod sit amet mollis quis. Ali-quam erat volutpat. Morbi id dictum quam, ut commodo lorem. </p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- How It Works Section End -->

    <!-- App Section Begin -->
    <section class="app-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="img/phone.png" alt="">
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="app-text">
                        <div class="section-title">
                            <h2>Arranja a App Gratuita Agora!</h2>
                            <p>Procura Restaurantes, Cafés, Hoteis de todo Portugal Continental</p>
                        </div>
                        <p>Melhor aplicativo para procurar Restaurantes, Cafés, Hoteis a pouca distância onde se
                            encontra,
                            sem contar
                            com a procura dos melhor preços para satisfazer as suas necessidades financeiras</p>
                        <ul>
                            <li><img src="img/check-icon.png" alt="">Fácil Acesso</li>
                            <li><img src="img/check-icon.png" alt="">Fácil Procura</li>
                            <li><img src="img/check-icon.png" alt="">Fácil Reservas
                            </li>
                        </ul>
                        <a href="#"><img src="img/apple-store.jpg" alt=""></a>
                        <a href="#"><img src="img/google-store.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
bottom();
?>