<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);

$sql = "Select * from distritos where distritoNome LIKE '%$txt%'";


$result = mysqli_query($con, $sql);


?>


<section class="contact-section search-filter spad">
    <div class="container">
        <div class="col-lg-12 mt-4">
            <table class='table table-striped table-hover'>
                <td colspan="5" align='right'>
                    <a data-toggle="modal" data-target="#adicionar"  ><i class='fas text-dark'> Adiciona</i></a>
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
                <tr id="<?php echo $dados['distritoId']; ?>">
                    <td data-target="distritoId"><?php echo $dados['distritoId'] ?></td>
                    <td data-target="distritoNome" ><?php echo $dados['distritoNome'] ?></td>
                    <td><a onclick="editaDistrito(<?php echo $dados['distritoId'];?>)" > <i
                                    class="fas fa-edit text-primary"></i></a></td>
                    <td><a onclick="eliminaDistrito(<?php echo $dados['distritoId'];?>)" > <i class="fas fa-trash  text-danger"></i></a></td>
                </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</section>


