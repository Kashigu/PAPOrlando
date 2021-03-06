<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);
$sql = "Select * from categorias where categoriaNome LIKE '%$txt%'";

$result = mysqli_query($con, $sql);

?>
<section class="contact-section search-filter spad">
    <div class="container">
        <div class="col-lg-12 mt-4">
            <table class="table table-striped table-hover">
                <tr>
                <td colspan="5" align='right'>
                    <a data-toggle="modal" data-target="#categoria"><i class='fas text-dark'> Adiciona</i></a>
                </td>
                </tr>
                <tr>
                    <th width="3%">Id</th>
                    <th width="3%">Nome</th>
                    <th colspan="3" class="centertext">Opções</th>
                </tr>
    <?php
    while ($dados = mysqli_fetch_array($result)) {
        ?>

        <tr>
            <td><?php echo $dados['categoriaId'] ?></td>
            <td><?php echo $dados['categoriaNome'] ?></td>
            <td><img width='90' src="<?php echo $dados['categoriaImagemURL'] ?>"></td>
            <td><a href="editaEmpresa.php?id=<?php echo $dados['categoriaId'] ?>"> <i
                        class="fas fa-edit text-primary"></i></a></td>
            <td><a onclick="confirmaElimina(<?php echo $dados['categoriaId'] ?>);"> <i
                        class="fas fa-trash  text-danger"></i></a></td>
        </tr>
        <?php
    }
    ?>


</table>
