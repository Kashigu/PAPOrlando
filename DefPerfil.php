<?php
include_once("includes/body.inc.php");
toponovo();

?>

<section class="contact-section spad">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="novoperfil.php" class="contact-form"> <!-- (class importante ) falta poder clicar na imagem para trocar!-->
                    <div>
                        <img src="img/perfilfoto.jpg" class="center">
                        <p></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" placeholder="Teu Username">
                        </div>
                        <div class="col-lg-6">
                            <input type="email" placeholder="Teu E-mail">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" placeholder="Atual Palavra-passe">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" placeholder="Nova Palavra-passe">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" placeholder="Comfirma��o Nova Palavra-passe">
                        </div>
                        <div class="col-lg-6">
                            <button type="submit">Confirmar altera��es </button>
                        </div>
                </form>
                <div class="col-lg-6  contact-form">
                    <button> <a href="index.php" >Eliminar Conta </a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
bottom();
?>
