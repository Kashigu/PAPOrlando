<?php
include_once("includes/body.inc.php");
toputili();

?>


    <div class="hero-listing set-bg" data-setbg="img/maravilha.jpg">
    </div>
    <!-- Map Section Begin -->
    <!--<div class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd"
            height="657" style="border:0;" allowfullscreen="">
        </iframe>
    </div>
    <!-- Map Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo "<form action=\"confirmarNovoEstabelecimento.php\" class=\"contact-form\" method=\"post\" enctype=\"multipart/form-data\">"; ?>
                    <div class="row">
                        <div class="col-lg-4 ">

                            <label name="categoria" class="check">
                                <input type="radio" checked="checked" name="radio">
                                <span class="checkmark"></span>
                                    <?php
                                    $sql="select * from categorias order by categoriaNome";
                                    $resultCategorias=mysqli_query($con,$sql);
                                    while ($dadosCategorias=mysqli_fetch_array($resultCategorias)){
                                        ?>
                                <span type="radio" values= "<?php echo $dadosCategorias['categoriaId']?>">
                                            <?php echo $dadosCategorias['categoriaNome']?>
                                </span>
                                        <?php
                                    }
                                    ?>
                            </label>


                            <!-- <label for="cafe">Café
                             <input type="radio" name="gender" id="cafe" value="cafe"></label> -->
                        </div>
                        <div class="col-lg-4 ">

                            <label class="check">Restaurante
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>


                            <!-- <label for="restaurante">Restaurante
                                 <input type="radio" name="gender" id="restaurante" value="restaurante"></label> -->

                        </div>
                        <div class="col-lg-4 ">
                            <label class="check">Hotel
                                <input type="radio" name="radio">
                                <span class="checkmark"></span>
                            </label>


                            <!--<label for="hotel">Hotel
                                <input type="radio" name="gender" id="hotel" value="hotel"></label> -->
                        </div>
                        <div class="col-lg-6 mt-4">
                            <input type="text" name="nomeEsta" placeholder="Nome do Estabelecimento">
                        </div>
                        <div class="col-lg-3 mt-4">
                            <input type="text" name="nomeLoca" placeholder="Localidade">
                        </div>
                        <div class="col-lg-3 mt-4 arrange-select nice-select2">
                            <span>Distritos</span>
                           <select name="distrito">
                <option value="-1">Escolha do distrito</option>
                <?php
                $sql="select * from distritos order by distritoNome";
                $resultDistritos=mysqli_query($con,$sql);
                while ($dadosDistritos=mysqli_fetch_array($resultDistritos)){
                    ?>
                    <option value="<?php echo $dadosDistritos['distritoId']?>">
                        <?php echo $dadosDistritos['distritoNome']?>
                    </option>
                    <?php
                }
                ?>
                           </select>



                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="nomeSlogan" placeholder="Slogan">
                        </div>
                        <div class="col-lg-12">
                            <textarea name="sobre" placeholder="Sobre o Estabelecimento"></textarea>
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="rua" placeholder="Rua">
                            <input type="tel" name="numero" placeholder="Número">
                            <input type="email" name="email" placeholder="Email do Estabelecimento">
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-5">
                                    <label>Segunda a sexta</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="horas" placeholder="8:00 - 22:00">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label>Sábado</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="horas1" placeholder="8:00 - 22:00">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label>Domingo</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" name="horas2" placeholder="8:00 - 22:00">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <label>Descanso Semanal</label>
                                </div>
                                <div class="col-7">
                                    <select>
                                        <option>Sem descanso</option>
                                        <option>Segunda-Feira</option>
                                        <option>Terça-Feira</option>
                                        <option>Quarta-Feira</option>
                                        <option>Quinta-Feira</option>
                                        <option>Sexta-Feira</option>
                                        <option>Sábado</option>
                                        <option>Domingo</option>
                                    </select>
                                </div>

                            </div>


                            <hr>


                        </div>
                        <div class="col-lg-6">
                            <label>Logótipo: </label>
                            <input type="file" name="logo">

                        </div>
                        <div class="col-lg-6">
                            <label>Imagem de Fundo: </label>
                            <input type="file" name="fundo">
                        </div>
                        <div class="col-lg-6">
                            <label>Posição do Estabelecimento no Google Earth: </label>
                            <input type="file" name="google">

                        </div>
                        <div class="col-lg-6">
                            <label>Imagens do Estabelecimento: </label>
                            <input type="file" name="estabelecimento">

                        </div>
                        <div class="col-lg-4 mt-3">
                        </div>
                        <div class="col-lg-8 mt-3">
                            <button type="submit">Confirmar Estabelecimento</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
bottom();
?>