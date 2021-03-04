<?php
include_once("includes/body.inc.php");
toponovo();

?>

<section class="contact-section search-filter spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="backoffice.php" class="filter-search filter-search1 filter-search2">
                    <div class="location-search1 col-lg-4 mt-3 ">
                        <h5>Nome dos Distritos</h5>
                        <input class="location-search1 nice-select1" type="text" id="search">
                    </div>
                    <button type="submit">Voltar</button>
                </form>
            </div>
        </div>
        <div class="col-12 mt-4">
            <table class="table table-striped table-hover">
                <td colspan="5" align='right'>
                    <a data-toggle="modal" data-target="#distrito"><i class='fas text-dark'> Adiciona</i></a>
                </td>
                </tr>
                <tr>
                    <th width="3%">Id</th>
                    <th width="3%">Nome</th>
                    <th colspan="3" class="centertext">Opções</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Leiria</td>
                    <td width="5%" class="centertext">Editar</td>
                    <td width="5%" class="centertext">Eliminar</td>
                </tr>
            </table>
        </div>

        <div class="col-12 mt-4">
            <table class="table table-striped table-hover">
                <tr>
                    <th width="3%">Id</th>
                    <th width="3%">Nome</th>
                    <th colspan="3" class="centertext">Opções</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Porto</td>
                    <td width="5%" class="centertext">Editar</td>
                    <td width="5%" class="centertext">Eliminar</td>
                </tr>
            </table>
        </div>
        <div class="col-12 mt-4">
            <table class="table table-striped table-hover">
                <tr>
                    <th width="3%">Id</th>
                    <th width="3%">Nome</th>
                    <th colspan="3" class="centertext">Opções</th>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lisboa</td>
                    <td width="5%" class="centertext">Editar</td>
                    <td width="5%" class="centertext">Eliminar</td>
                </tr>
            </table>
        </div>
        <div class="col-12 mt-4">
            <table class="table table-striped table-hover">
                <tr>
                    <th width="3%">Id</th>
                    <th width="3%">Nome</th>
                    <th colspan="3" class="centertext">Opções</th>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bragança</td>
                    <td width="5%" class="centertext">Editar</td>
                    <td width="5%" class="centertext">Eliminar</td>
                </tr>
            </table>
        </div>
    </div>
</section>
<!--<div class="container">
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Adicionar Novo Distrito</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>

            </div>
        </div>
    </div>
</div> -->
<div class="container">

    <!-- Modal Login-->

    <div class="modal fade" id="distrito" tabindex="-1" aria-labelledby="distrito" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?php echo "<form action=\"confirmaNovoDistrito.php\" class=\"contact-form\" method=\"post\" enctype=\"multipart/form-data\">";
                ?>
                    <div class="modal-header">
                        <h5 class="modal-title" id="distrito">Adicionar Novo Distrito</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="row">
                        <div class="modal-body">
                            <div class="col-lg-6 mt-3 meio">
                                <?php
                                echo "<input type=\"text\" name=\"nomeDistrito\" placeholder='Nome do Distrito'><br>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer mt-2">
                        <div class="col-lg-7 meio">
                            <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                        </div>
                        <div class="col-lg-5 meio">
                            <button type="button" class="btn btn-primary mt-2">Adicionar</button>

                        </div>
                    </div>
                <?php echo "</form >" ?>
            </div>
        </div>
    </div>
</div>


<?php
bottom();
?>
