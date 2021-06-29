<?php
include_once("includes/body.inc.php");
toposingle();
$id = intval($_GET['id']);

$sql="select * from estabelecimentos where estabelecimentoId=".$id;

$resultEstabelecimentos = mysqli_query($con, $sql);
$dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos)
?>

<section class="contact-section spad">


    <div class="container">
        <a href="listaReservaAdmin.php?id=<?php echo $id?>"><button>Voltar</button></a>
        <h3 class="mt-2">Lista de Reservas</h3>
        <h3 class="mt-2"><?php echo $dadosEstabelecimentos['estabelecimentoNome']  ?></h3>
        <div class="row mt-2">

            <div class="col-3 mt-2">

                <a href="criado.php?id=<?php echo $dadosEstabelecimentos['estabelecimentoId'] ?>"><img class="quadradinho" src="<?php echo $dadosEstabelecimentos['estabelecimentoMiniaturaURL'] ?>" ></a>
            </div>
            <div class="col-9 mt-2" id="tableContent">

            </div>
        </div>
    </div>
</section>

<?php
bot(RESERVASHISTORICO,$id);
?>

