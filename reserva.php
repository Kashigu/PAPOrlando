<?php
include_once("includes/body.inc.php");
toponovo();

?>

<section class="contact-section spad">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="listaReserva.php" class="contact-form"> <!-- (class importante ) falta poder clicar na imagem para trocar!-->
                    <div>
                        <h2 class="centertext"> Ratoeira </h2>
                        <p></p>
                        <img src="img/arrange/ratoeira1.jpg" class="center">
                        <p></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="date" placeholder="Data">
                        </div>
                        <div class="col-lg-6">
                            <input type="time" placeholder="Hora">
                        </div>
                        <div class="col-lg-6">
                            <button type="submit">Confirmar Reserva </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>

<?php
bottom();
?>
