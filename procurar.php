<?php
include_once("includes/body.inc.php");
top(Procurar);

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
                        <select class="ca-search">
                            <option>Restaurantes</option>
                            <option>Cafés</option>
                            <option>Hoteis</option>
                        </select>
                    </div>
                    <div class="location-search col-lg-5">
                        <h5>Tua Localização</h5>
                        <select class="lo-search">
                            <option>Viana do Castelo</option>
                            <option>Braga</option>
                            <option>Porto</option>
                            <option>Vila Real</option>
                            <option>Bragança</option>
                            <option>Aveiro</option>
                            <option>Viseu</option>
                            <option>Guarda</option>
                            <option>Coimbra</option>
                            <option>Leiria</option>
                            <option>Castelo Branco</option>
                            <option>Santarém</option>
                            <option>Portalegre</option>
                            <option>Lisboa</option>
                            <option>Setúbal</option>
                            <option>Évora</option>
                            <option>Beja</option>
                            <option>Faro</option>
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
                                <option>Recente</option>
                            </select>
                        </form>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="arrange-items" href="single-listing.php">
                            <div class="arrange-pic">
                                <img src="img/arrange/ratoeira1.jpg" alt="">
                                <div class="rating">4.9</div>
                                <div class="tic-text">Restaurante</div>
                            </div>
                            <div class="arrange-text">
                                <h5>Ratoeira</h5>
                                <span>Marinha Grande , No 25/11</span>
                                <p>Fusce urna quam, euismod sit</p>
                                <div class="open tomorrow">Abre amanhã às 10 da manhã</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="arrange-items" href="segundo.php">
                            <div class="arrange-pic">
                                <img src="img/arrange/100.jpg" alt="">
                                <div class="rating">4.9</div>
                                <div class="tic-text">Restaurante</div>
                            </div>
                            <div class="arrange-text">
                                <h5>Pizzaria 100 Nome</h5>
                                <span>Marinha Grande , No 25/11</span>
                                <p>Euismod sit amet mollis.</p>
                                <div class="open">Aberto antes das 3 da Tarde</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="arrange-items" href="hotel.php">
                            <div class="arrange-pic">
                                <img src="img/arrange/arrange-3.jpg" alt="">
                                <div class="rating">4.9</div>
                                <div class="tic-text">Restaurants</div>
                            </div>
                            <div class="arrange-text">
                                <h5>Pizza Oven</h5>
                                <span>Main Road , No 25/11</span>
                                <p>Euismod sit amet mollis.</p>
                                <div class="open">Open Until 3am</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="arrange-items" href="restaurante.php">
                            <div class="arrange-pic">
                                <img src="img/arrange/arrange-4.jpg" alt="">
                                <div class="rating">4.9</div>
                                <div class="tic-text">Restaurants</div>
                            </div>
                            <div class="arrange-text">
                                <h5>Petit Place Cafe</h5>
                                <span>Main Road , No 25/11</span>
                                <p>Fusce urna quam, euismod.</p>
                                <div class="open tomorrow">Opens Tomorow at 10am</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="arrange-items" href="single-listing.html">
                            <div class="arrange-pic">
                                <img src="img/arrange/arrange-5.jpg" alt="">
                                <div class="rating">4.9</div>
                                <div class="tic-text">Restaurants</div>
                            </div>
                            <div class="arrange-text">
                                <h5>Green Pub</h5>
                                <span>Main Road , No 25/11</span>
                                <p>Urna quam, euismod sit amet.</p>
                                <div class="open">Open Until 3am</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="arrange-items" href="single-listing.html">
                            <div class="arrange-pic">
                                <img src="img/arrange/arrange-6.jpg" alt="">
                                <div class="rating">4.9</div>
                                <div class="tic-text">Restaurants</div>
                            </div>
                            <div class="arrange-text">
                                <h5>Cosmo Pub</h5>
                                <span>Main Road , No 25/11</span>
                                <p>Urna quam, euismod sit amet.</p>
                                <div class="open">Open Until 3am</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="arrange-items" href="single-listing.html">
                            <div class="arrange-pic">
                                <img src="img/arrange/arrange-7.jpg" alt="">
                                <div class="rating">4.9</div>
                                <div class="tic-text">Restaurants</div>
                            </div>
                            <div class="arrange-text">
                                <h5>Trocadero Restaurant</h5>
                                <span>Main Road , No 25/11</span>
                                <p>Euismod sit amet mollis.</p>
                                <div class="open closed">Closed Now</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="arrange-items" href="single-listing.html">
                            <div class="arrange-pic">
                                <img src="img/arrange/arrange-8.jpg" alt="">
                                <div class="rating">4.9</div>
                                <div class="tic-text">Restaurants</div>
                            </div>
                            <div class="arrange-text">
                                <h5>Pizza Bistro</h5>
                                <span>Main Road , No 25/11</span>
                                <p>Fusce urna quam, euismod.</p>
                                <div class="open">Open Until 3am</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="arrange-items" href="single-listing.html">
                            <div class="arrange-pic">
                                <img src="img/arrange/arrange-9.jpg" alt="">
                                <div class="rating">4.9</div>
                                <div class="tic-text">Restaurants</div>
                            </div>
                            <div class="arrange-text">
                                <h5>Ciao Pub</h5>
                                <span>Main Road , No 25/11</span>
                                <p>Fusce urna quam, euismod.</p>
                                <div class="open">Open Until 3am</div>
                            </div>
                        </a>
                    </div>
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
bottom();
?>
