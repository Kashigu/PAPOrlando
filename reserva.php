<?php
include_once("includes/body.inc.php");
toposingle();
$id=intval($_GET['id']);
$sql = "Select * from estabelecimentos ";
// inner join categorias
$sql.= " where estabelecimentoId=$id";

$resultEstabelecimentos = mysqli_query($con, $sql);
$dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos)
?>

<section class="contact-section spad">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="listaReserva.php?id=<?php $_SESSION['id'] ?>" class="contact-form"> <!-- (class importante ) falta poder clicar na imagem para trocar!-->
                    <div>
                        <h2 class="centertext"> <?php echo $dadosEstabelecimentos['estabelecimentoNome'] ?> </h2>
                        <p></p>
                        <img src="<?php echo $dadosEstabelecimentos['estabelecimentoMiniaturaURL'] ?>" class="center">
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
bot();
?>
