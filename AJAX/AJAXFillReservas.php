<?php
include_once("../includes/body.inc.php");
session_start();
$txt = addslashes($_POST['txt']);
$id = intval($_POST['id']);
/*$sql = "Select * from reservas inner join estabelecimentos on reservaEstabelecimentoId=estabelecimentoId
                               inner join perfis on reservaPerfilId=perfilId
                               where perfilId=" . $id . " and estabelecimentoNome LIKE '%$txt%'";



(select * from estabelecimentos
						inner join reservas on reservaEstabelecimentoId=estabelecimentoId
						where reservaPerfilId=2)*/


$sql1="select 
 estabelecimentoNome
 ,estabelecimentoId
 ,estabelecimentoMiniaturaURL
 ,reservaData
-- , perfilId
-- , DATEDIFF(reservaData,current_date) as reservaData1
 ,reservaId
 ,reservaEstado
 ,reservaDescricao
-- , reservaEstabelecimentoId */
 from estabelecimentos inner join reservas on reservaEstabelecimentoId=estabelecimentoId
 inner join perfis on perfilId = reservaPerfilId
 where DATEDIFF(reservaData,current_date) >= 0 and reservaPerfilId=$id and estabelecimentoNome LIKE '%$txt%'";




$resultEstabelecimentos = mysqli_query($con, $sql1);

?>
<a href="apagarReservasRecusadas.php?id=<?php echo $id ?>"> <button style="margin-left: 77%">Apagar Reservas Recusadas</button></a>
<?php
while ($dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos)) {
    ?>
    <div class="container mt-3">
        <h3 class="mt-2"><?php echo $dadosEstabelecimentos['estabelecimentoNome'] ?></h3>
        <div class="row mt-2">

            <div class="col-3 mt-2">

                <a href="single-listing.php?id=<?php echo $dadosEstabelecimentos['estabelecimentoId'] ?>"><img
                            class="quadradinho"
                            src="<?php echo $dadosEstabelecimentos['estabelecimentoMiniaturaURL'] ?>"></a>
            </div>
            <div class="col-9 mt-2">
                <table class="table table-striped table-hover">
                    <tr>
                        <th width="35%">Data</th>
                        <th>Descrição</th>
                        <th colspan="2" class="centertext">Opções</th>
                    </tr>
                    <tr>
                        <?php if ($dadosEstabelecimentos['reservaEstado'] == 'aceitar') { ?>

                            <td><?php echo $dadosEstabelecimentos['reservaData'] ?></td>
                            <td><?php echo $dadosEstabelecimentos['reservaDescricao'] ?></td>
                            <td width="30%" class="centertext">Reserva Aceite</td>
                            <?php
                        } elseif ($dadosEstabelecimentos['reservaEstado'] == 'eliminar') {
                            ?>
                            <td><?php echo $dadosEstabelecimentos['reservaData'] ?></td>
                            <td><?php echo $dadosEstabelecimentos['reservaDescricao'] ?></td>
                            <td width="30%" class="centertext">Reserva Recusada</td>
                            <?php
                        } else {
                            ?>
                            <td><?php echo $dadosEstabelecimentos['reservaData'] ?></td>
                            <td><?php echo $dadosEstabelecimentos['reservaDescricao'] ?></td>
                            <td class="centertext"><a
                                        onclick="editaReserva(<?php echo $dadosEstabelecimentos['reservaId']; ?>)"><i
                                            class="fa fa-edit text-primary"></i></a></td>
                            <td class="centertext"><a
                                        onclick="eliminaReserva(<?php echo $dadosEstabelecimentos['reservaId'] ?>,<?php echo $id; ?>)"> <i
                                            class="fa fa-trash  text-danger"></i></a></td>

                            <?php
                        }
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php
}
?>
</table>
