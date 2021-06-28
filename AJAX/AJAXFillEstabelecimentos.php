<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);
session_start();

/*$sql = "Select * from estabelecimentos inner join estabelecimentocategorias on estabelecimentoId = estabelecimentoCategoriaEstabelecimentoId
        inner join perfis where estabelecimentoNome LIKE '%$txt%'";*/

$sql = " select *
                            from distritos inner join estabelecimentos 
                            on distritoId=estabelecimentoDistritoId
                            INNER JOIN perfis 
                            on perfilId=estabelecimentoPerfilId
                            INNER JOIN categorias
                            on categoriaId=estabelecimentoCategoriaId
                            where estabelecimentoNome LIKE '%$txt%'";

$result = mysqli_query($con, $sql);

$sql1="select * from perfis where perfilId=".$_SESSION['id'];
$resultado=mysqli_query($con,$sql1);
$dados=mysqli_fetch_array($resultado);
//coisas
?>


    <div class="container about-section about-item client-reviews">

            <table class="table table-striped table-hover">
                <td colspan="7" align='right'>
                    <a href="../criarEstabelecimento.php?id=<?php echo $dados['perfilId'] ?>"><i class='fas text-dark'> Adiciona</i></a>
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
                    <td><a href="../criado.php?id= <?php echo $dados['estabelecimentoId'] ?>"> <?php echo $dados['estabelecimentoNome'] ?></td></a>
                    <td><img width='100' height="100" src="../<?php echo $dados['estabelecimentoMiniaturaURL'] ?>"></td>
                    <td><?php echo $dados['perfilNome'] ?></td>
                    <td><?php echo $dados['categoriaNome'] ?></td>
                    <td><a href="../definicoesEstabelecimento.php?id=<?php echo $dados['estabelecimentoId'];?>"> <i
                                    class="fa fa-edit text-primary"></i></a></td>
                    <td><a onclick="DeleteEstabelecimentos(<?php echo $dados['estabelecimentoId'];?>)"> <i class="fa fa-trash  text-danger"></i></a></td>

                </tr>
                <?php
                }
                ?>
               </table>
        </div>




