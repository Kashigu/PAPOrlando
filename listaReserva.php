<?php
include_once("includes/body.inc.php");
toputili();
$id=intval($_GET['id']);
$sql = "Select * from estabelecimentos ";
// inner join categorias
$sql.= " where estabelecimentoId=$id";

$resultEstabelecimentos = mysqli_query($con, $sql);
$dadosEstabelecimentos = mysqli_fetch_array($resultEstabelecimentos)
?>

<section class="contact-section spad">

    <div class="container">
        <h3 class="mt-2">Ratoeira</h3>
        <div class="row mt-2">

            <div class="col-3 mt-2">

                <a href="single-listing.html"><img src="img/arrange/ratoeira1.jpg"></a>
            </div>
            <div class="col-9 mt-2">
                <table class="table table-striped table-hover">
                    <tr>
                        <th width="15%">Data</th>
                        <th width="10%">Hora</th>
                        <th colspan="3">Observações</th>
                    </tr>
                    <tr>
                        <td>12-02-2021</td>
                        <td>13:00</td>
                        <td>Mesa para quatro</td>
                        <td width="5%">Editar</td>
                        <td width="5%">Eliminar</td>
                    </tr>
                </table>
            </div>
        </div>
        <h3 class="mt-3">Pizzaria Sem Nome</h3>
        <div class="row mt-3">

            <div class="col-3">

                <a href="segundo.html"><img src="img/arrange/100.jpg" ></a>
            </div>
            <div class="col-9">
                <table class="table table-striped table-hover">
                    <tr>
                        <th width="15%">Data</th>
                        <th width="10%">Hora</th>
                        <th colspan="3">Observações</th>
                    </tr>
                    <tr>
                        <td>12-02-2021</td>
                        <td>13:00</td>
                        <td>Mesa para quatro</td>
                        <td width="5%">Editar</td>
                        <td width="5%">Eliminar</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<?php
bot();
?>
