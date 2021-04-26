<?php
include_once("../includes/body.inc.php");
session_start();

$id = intval($_POST['id']);
 $sql = "Select * from reservas inner join estabelecimentos on reservaEstabelecimentoId=estabelecimentoId
                               inner join perfis on reservaPerfilId=perfilId
                               where estabelecimentoId =" . $id;

$resultEstabelecimentos = mysqli_query($con, $sql);

?>
    <div class="col-9 mt-2">
    <table class="table table-striped table-hover">
    <tr>
        <th width="35%">Data</th>
        <th>Descrição</th>
        <th colspan="2">Opções</th>
    </tr>
<?php
while ($dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos)) {
    ?>

    <tr>
        <td><?php echo $dadosEstabelecimentos['reservaData'] ?></td>
        <td><?php echo $dadosEstabelecimentos['reservaDescricao'] ?></td>
        <td width="5%">Aceitar</td>
        <td width="5%">Eliminar</td>
    </tr>


    <?php
}
?>
    </table>
    </div>
<?php
?>