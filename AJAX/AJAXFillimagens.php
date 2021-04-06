<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$id=intval($_POST['id']);
$txt = addslashes($_POST['txt']);
$sql = "Select * from imagens where imagemEstabelecimentoId='$id' and imagemNome LIKE '%$txt%'";

$result = mysqli_query($con, $sql);

?>

    <div class="container">

            <table class="table table-striped table-hover">
                <tr>
                <td colspan="5" align='right'>
                    <a data-toggle="modal" data-target="#adicionar"><i class='fas text-dark'> Adiciona</i></a>
                </td>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Imagem</th>
                    <th colspan="2" class="centertext">Opções</th>
                </tr>
    <?php
    while ($dados = mysqli_fetch_array($result)) {
        ?>

        <tr id="<?php echo $dados['imagemId']; ?>">
            <td data-target="imagemId"><?php echo $dados['imagemId'] ?></td>
            <td data-target="imagemNome"><?php echo $dados['imagemNome'] ?></td>
            <td data-target="imagemImagem"><img width='100' height="100" src="<?php echo $dados['imagemURL'] ?>"></td>
            <td><a onclick="editaImagem(<?php echo $dados['imagemId'];?>)" ><i
                        class="fas fa-edit text-primary"></i></a></td>
            <td><a onclick="eliminaImagem(<?php echo $dados['imagemId'];?>)"> <i class="fas fa-trash  text-danger"></i></a></td>
        </tr>
        <?php
    }
    ?>


</table>
