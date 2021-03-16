<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);
$sql = "Select * from categorias where categoriaNome LIKE '%$txt%'";

$result = mysqli_query($con, $sql);

?>

    <div class="container">

            <table class="table table-striped table-hover">
                <tr>
                <td colspan="5" align='right'>
                    <a data-toggle="modal" data-target="#categoria"><i class='fas text-dark'> Adiciona</i></a>
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

        <tr id="<?php echo $dados['categoriaId']; ?>">
            <td data-target="categoriaId"><?php echo $dados['categoriaId'] ?></td>
            <td data-target="categoriaNome"><?php echo $dados['categoriaNome'] ?></td>
            <td data-target="categoriaImagem"><img width='100' height="100" src="../<?php echo $dados['categoriaImagemURL'] ?>"></td>
            <td><a onclick="editaCategoria(<?php echo $dados['categoriaId'];?>)" ><i
                        class="fas fa-edit text-primary"></i></a></td>
            <td><a onclick="eliminaCategorias(<?php echo $dados['categoriaId'];?>)"> <i class="fas fa-trash  text-danger"></i></a></td>
        </tr>
        <?php
    }
    ?>


</table>
