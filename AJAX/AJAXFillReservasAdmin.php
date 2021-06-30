<?php
include_once("../includes/body.inc.php");
session_start();

$id = intval($_POST['id']);
//$sql = "Select * from reservas inner join estabelecimentos on reservaEstabelecimentoId=estabelecimentoId
      //                         inner join perfis on reservaPerfilId=perfilId
    //                           where estabelecimentoId =" . $id;

$sql = "select reservaData, perfilId,
                DATEDIFF(reservaData,current_date) as reservaData1,reservaId,reservaEstado,reservaDescricao
	
								from reservas inner join perfis on reservaPerfilId=perfilId
                                              inner join estabelecimentos on reservaEstabelecimentoId=estabelecimentoId
								              where DATEDIFF(reservaData,current_date) >= 0 and estabelecimentoId=".$id;

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
                    <?php if ($dadosEstabelecimentos['reservaEstado'] == 'eliminar') {
                    } elseif ($dadosEstabelecimentos['reservaEstado'] == 'neutro') {
                        ?>
                        <td><?php echo $dadosEstabelecimentos['reservaData'] ?></td>
                        <td><?php echo $dadosEstabelecimentos['reservaDescricao'] ?></td>

                        <td width="5%"><a class="a3"
                                          href="aceitarReserva.php?id=<?php echo $dadosEstabelecimentos['reservaId']; ?>">
                                Aceitar </a></td>
                        <td width="5%"><a class="a3"
                                          href="recusarReserva.php?id=<?php echo $dadosEstabelecimentos['reservaId']; ?>">
                                Recusar </a></td>
                        <?php
                    }
                    ?>
                </tr>


                <?php
            }
            ?>
        </table>
    </div>
<?php
?>