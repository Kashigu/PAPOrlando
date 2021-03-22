<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);

/*$sql = "Select * from estabelecimentos inner join estabelecimentocategorias on estabelecimentoId = estabelecimentoCategoriaEstabelecimentoId
        inner join perfis where estabelecimentoNome LIKE '%$txt%'";*/

$sql = "Select * from estabelecimentos inner join categorias
        inner join perfis where estabelecimentoNome LIKE '%$txt%'";

$result = mysqli_query($con, $sql);


?>

<section class="contact-section search-filter spad">
    <div class="container">
        <div class="col-12 mt-4">
            <table class="table table-striped table-hover">
                <td colspan="7" align='right'>
                    <a href="../criarEstabelecimento.php"><i class='fas text-dark'> Adiciona</i></a>
                </td>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Imagem</th>
                    <th>Criador</th>
                    <th>Tipo</th>
                    <th colspan="2" class="centertext">Opções</th>

                </tr>

                    <?php
                    while ($dados = mysqli_fetch_array($result)) {
                    ?>

                <tr id="<?php echo $dados['estabelecimentoId']; ?>">
                    <td><?php echo $dados['estabelecimentoId'] ?></td>
                    <td><?php echo $dados['estabelecimentoNome'] ?></td>
                    <td><img width='100' height="100" src="../<?php echo $dados['estabelecimentoMiniaturaURL'] ?>"></td>
                    <td><?php echo $dados['perfilNome'] ?></td>
                    <td><?php echo $dados['categoriaNome'] ?></td>
                    <td><a href="../definicoesEstabelecimento.php?id=<?php echo $dados['estabelecimentoId'];?>"> <i
                                    class="fas fa-edit text-primary"></i></a></td>
                    <td><a onclick="DeleteEstabelecimentos(<?php echo $dados['estabelecimentoId'];?>)"> <i class="fas fa-trash  text-danger"></i></a></td>

                </tr>
                <?php
                }
                ?>
               </table>
        </div>

    </div>
</section>

