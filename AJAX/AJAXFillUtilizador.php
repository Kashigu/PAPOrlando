<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);

$sql = "Select * from perfis where perfilNome LIKE '%$txt%'";


$result = mysqli_query($con, $sql);


?>



    <div class="container about-section about-item client-reviews">

            <table class='table table-striped table-hover' width="100%">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Imagem</th>
                    <th>Email</th>
                    <th colspan="2" class="centertext">Estado</th>
                    <th colspan="3" class="centertext">Opções</th>
                </tr>
                <?php
                while ($dados = mysqli_fetch_array($result)) {
                ?>
                <tr id="<?php echo $dados['perfilId']; ?>">
                    <td data-target="perfilId"><?php echo $dados['perfilId'] ?></td>
                    <td><a href="../novoperfil.php?id= <?php echo $dados['perfilId'] ?>"> <?php echo $dados['perfilNome'] ?></td></a>
                    <td data-target="perfilImagem"><img width='100' height="100" src="../<?php echo $dados['perfilAvatar'] ?>"></td>
                    <td data-target="perfilEmail" ><?php echo $dados['perfilEmail'] ?></td>
                    <td data-target="perfilEstado" ><?php echo $dados['perfilEstado'] ?></td>
                    <td data-target="perfilEstado" ><?php echo $dados['perfilAdmin'] ?></td>
                    <?php
                    if ($dados['perfilEstado'] == 'inativo'){
                    ?>
                    <td><a href="ativarUtilizador.php?id=<?php echo $dados['perfilId'];?>"> Ativar </a></td>
                    <?php
                    } else if ($dados['perfilEstado'] == 'ativo') {
                    ?>
                    <td><a href="desativarUtilizador.php?id=<?php echo $dados['perfilId'];?>"> Desativar</a></td>
                    <?php
                    }
                    if ($dados['perfilAdmin'] == 'utilizador'){
                    ?>
                    <td><a href="ativarAdmin.php?id=<?php echo $dados['perfilId'];?>"> Tornar Administrador </a></td>
                    <?php
                    } else if ($dados['perfilAdmin'] == 'admin') {
                    ?>
                    <td><a href="desativarAdmin.php?id=<?php echo $dados['perfilId'];?>"> Tornar Utilizador</a></td>
                    <?php
                    }
                    ?>
                    <td><a onclick="DeleteUtilizador(<?php echo $dados['perfilId'];?>)"> <i class="fa fa-trash  text-danger"></i></a></td>

                </tr>
                    <?php
                }
                ?>
            </table>

    </div>



