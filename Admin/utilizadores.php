<?php
include_once("../includes/body.inc.php");
topAdmin();

?>

<section class="contact-section search-filter spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="index.php" class="filter-search filter-search1 filter-search2">
                    <div class="location-search1 col-lg-4 mt-3 ">
                        <h5>Nome do Utilizador</h5>
                        <input class="location-search1 nice-select1" type="text" id="search">
                    </div>
                    <button type="submit">Voltar</button>
                </form>
            </div>
        </div>
        <div class="col-lg-12 mt-3" id="tableContent">
        </div>
    </div>
</section>


<!-- Modal do Eliminar -->
<div class="modal fade" id="staticBackdropDele" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class=contact-form method=post enctype=multipart/form-data>

                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar Distrito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <span id="idPerfil"></span>

                </div>
                <div class="modal-footer">
                    <div class="col-lg-7 meio">
                        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="col-lg-5 meio">
                        <button onclick="DeleteTableUtilizador();" type="button" id="eliminar"
                                class="btn btn-danger pull-right ">Eliminar
                        </button>
                    </div>
                </div>
        </div>
        <input type="hidden" id="PerfilID">
        </form >
    </div>
</div>


<!-- Modal do Editar-->


<?php
botAdmin(UTILIZADOR);
?>
