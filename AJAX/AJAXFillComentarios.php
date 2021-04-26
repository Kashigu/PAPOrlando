<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['idEstabelecimento']);

$sqlRating = "Select * from ratings inner join redes on redeId=ratingRedeId
                                                                  inner join estabelecimentos on estabelecimentoId=redeEstabelecimentoId
                                                                  inner join perfis on perfilId=redePerfilId
                                                                  where estabelecimentoId=" . $id;
$resultRatings = mysqli_query($con, $sqlRating);

$sql = "Select * from comentarios inner join estabelecimentos on estabelecimentoId=comentarioEstabelecimentoId
                                    inner join perfis on perfilId=comentarioPerfilId where estabelecimentoId=" . $id;

$resultComentarios = mysqli_query($con, $sql);

while ($dadosComentarios = mysqli_fetch_array($resultComentarios)) {
    ?>
    <div class="client-text mt-2">
        <a href="novoperfil.php?id=<?php echo $dadosComentarios['perfilId'] ?>" <h5><?php echo $dadosComentarios['perfilNome'] ?></h5></a>
    </div>
    <p class="mt-3"><?php echo $dadosComentarios['comentarioTexto'] ?></p>
    <hr>
    <?php
}
?>
