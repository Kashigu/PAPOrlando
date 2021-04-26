<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);

$sql = "Select * from distritos where distritoNome LIKE '%$txt%'";


$result = mysqli_query($con, $sql);


?>



    <div class="container">

            <table class='table table-striped table-hover' width="100%">
                <td colspan="5" align='right' >
                    <a data-toggle="modal" data-target="#adicionar"><i class='fas text-dark'> Adiciona</i></a>
                </td>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th colspan="2" class="centertext">Opções</th>
                </tr>
                <?php
                while ($dados = mysqli_fetch_array($result)) {
                ?>
                <tr id="<?php echo $dados['distritoId']; ?>">
                    <td data-target="distritoId"><?php echo $dados['distritoId'] ?></td>
                    <td data-target="distritoNome" ><?php echo $dados['distritoNome'] ?></td>
                    <td><a  onclick="editaDistrito(<?php echo $dados['distritoId'];?>)"> <i
                                    class="fa fa-edit text-primary"></i></a></td>
                    <td><a  onclick="eliminaDistrito(<?php echo $dados['distritoId'];?>)"> <i class="fa fa-trash  text-danger"></i></a></td>
                </tr>
                    <?php
                }
                ?>
            </table>

    </div>



