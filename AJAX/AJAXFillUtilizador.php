<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);

$sql = "Select * from perfis where perfilNome LIKE '%$txt%'";


$result = mysqli_query($con, $sql);


?>



    <div class="container">

            <table class='table table-striped table-hover' width="100%">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Imagem</th>
                    <th>Email</th>
                    <th>Estado</th>
                    <th colspan="4" class="centertext">Opções</th>
                </tr>
                <?php
                while ($dados = mysqli_fetch_array($result)) {
                ?>
                <tr id="<?php echo $dados['perfilId']; ?>">
                    <td data-target="perfilId"><?php echo $dados['perfilId'] ?></td>
                    <td data-target="perfilNome" ><?php echo $dados['perfilNome'] ?></td>
                    <td data-target="perfilImagem"><img width='100' height="100" src="../<?php echo $dados['perfilAvatar'] ?>"></td>
                    <td data-target="perfilEmail" ><?php echo $dados['perfilEmail'] ?></td>
                    <td data-target="perfilEstado" ><?php echo $dados['perfilEstado'] ?></td>
                    <td><a href="../novoperfil.php?id=<?php echo $dados['perfilId'];?>"> <i
                                    class="fa fa-edit text-primary"></i></a></td>

                    <td><a href="ativarUtilizador.php?id=<?php echo $dados['perfilId'];?>"> Ativar </a></td>
                    <td><a href="desativarUtilizador.php?id=<?php echo $dados['perfilId'];?>"> Desativar</a></td>
                    <td><a onclick="DeleteUtilizador(<?php echo $dados['perfilId'];?>)"> <i class="fa fa-trash  text-danger"></i></a></td>
                </tr>
                    <?php
                }
                ?>
            </table>

    </div>



