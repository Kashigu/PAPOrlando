<?php
include_once("includes/body.inc.php");
toposingle();
$id = intval($_GET['id']);
?>

<section class="contact-section search-filter spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="index.php" class="filter-search filter-search1 filter-search2">
                        <div class="location-search1 col-lg-12 mt-3 ">
                            <h5>Nome dos Estabelecimentos</h5>
                            <input class="location-search1 nice-select1" type="text" id="search">
                        </div>
                    </form>
                </div>
                <div class="col-lg-12 mt-3" id="tableContent">
                </div>
            </div>
        </div>
</section>
<!-- Modal do Eliminar -->
<div class="modal fade" id="staticBackdropDele" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data" class="contact-form">

                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar Reserva</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <span id="idReserva"></span>


                </div>
                <div class="modal-footer">
                    <div class="col-lg-7 meio">
                        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="col-lg-5 meio">
                        <button
                        <button onclick="DeleteTableReserva();" type="button" class="btn btn-danger mt-2">Eliminar</button>
                    </div>
                </div>
        </div>
        <input type="hidden" id="ReservaID">
        </form >
    </div>
</div>


<!-- Modal do Editar-->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="editarlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="confirmaEditaReserva.php" class="contact-form" method="post" enctype="multipart/form-data">
                <input type="hidden" value="<?php echo $id ?>" name="id">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarlabel">Editar Reserva</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="modal-body">
                        <div class="col-lg-6 mt-3 meio">
                            <textarea type="text" id="reservaDescricao" name="reservaDescricao"> <?php ?> </textarea>
                        </div>
                        <input type="hidden" id="reservaId" name="reservaId">
                    </div>
                </div>
                <div class="modal-footer mt-2">
                    <div class="col-lg-7 meio">
                        <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="col-lg-5 meio">
                        <button  type="submit" class="btn btn-danger mt-2">Alterar</button>
                    </div>

            </form>
        </div>
    </div>
</div>
</div>
<?php
bot(RESERVAS,$id);
?>
