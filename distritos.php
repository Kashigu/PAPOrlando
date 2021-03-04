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
                <tr>
                    <th width="3%">Id</th>
                    <th width="3%">Nome</th>
                    <th colspan="3"  class="centertext">Opções</th>
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
                    <th colspan="3"  class="centertext">Opções</th>
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
                    <th colspan="3"  class="centertext">Opções</th>
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
                    <th colspan="3"  class="centertext">Opções</th>
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







<?php
bottom();
?>
