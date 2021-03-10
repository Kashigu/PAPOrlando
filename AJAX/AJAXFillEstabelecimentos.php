<?php
// dados na base de dados
include_once("../includes/body.inc.php");
$txt = addslashes($_POST['txt']);

$sql = "Select * from estabelecimentos where estabelecimentoNome LIKE '%$txt%'";


$result = mysqli_query($con, $sql);


?>

<section class="contact-section search-filter spad">
    <div class="container">
        <div class="col-12 mt-4">
            <table class="table table-striped table-hover">
                <td colspan="5" align='right'>
                    <a href="../criarEstabelecimento.php"><i class='fas text-dark'> Adiciona</i></a>
                </td>
                <tr>
                    <th width="3%">Nome</th>
                    <th width="3%">Imagem</th>
                    <th width="3%">Criador</th>
                    <th width="10%">Tipo</th>
                    <th colspan="3" class="centertext">Opções</th>

                </tr>
                <tr>
                    <?php
                    $sql = "Select from estabelecimentos estabelecimentoNome,estabelecimentoImagemURl,";
                    $result = mysqli_query($con, $sql);

                    echo "<table>";
                    while ($dados = mysqli_fetch_array($result)) {

                        echo "<td>".$dados['estabelecimentoNome']."</td>";
                        echo "<td><img src=\"../".$dados['estabelecimentoImagemURL']."\"></td>";
                        echo "<td>".$dados['']."</td>";
                        echo "<td>".$dados['']."</td>";
                        echo "<td width='5%' class='centertext'>Editar</td>";
                        echo "<td width='5%' class='centertext'>Eliminar</td>";

                        echo "</tr>";
                    }
                    echo "</table>";
                    ?>

        </div>

    </div>
</section>

