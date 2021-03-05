<?php
include_once("includes/body.inc.php");
toponovo();

?>


<script>
    function confirmaElimina(id) {
        $.ajax({
            url: "AJAX/AJAXGetNameDistritos.php",
            type: "post",
            data: {
                idDistrito: id
            },
            success: function (result) {
                $('#contentModalDelete').html('Confirma que deseja eliminar o Distrito: ' + result + '?');
                $('#idDistrito').val(id);
                $('#staticBackdropDele').modal('toggle');
            }
        })
    };


    $('document').ready(function () {
        $('#search').keyup(function () {
            fillTableDistritos(this.value);
        });
        fillTableDistritos();
    })
</script>

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
            <div id="tableContent">
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
</div>-->
<!--<div class="container"> -->

<!-- Modal Login-->

<div class="modal fade" id="distrito" tabindex="-1" aria-labelledby="distritolabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo "<form action=\"confirmaNovoDistrito.php\" class=\"contact-form\" method=\"post\" enctype=\"multipart/form-data\">";
            ?>
            <div class="modal-header">
                <h5 class="modal-title" id="distritolabel">Adicionar Novo Distrito</h5>

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



<!-- Modal -->
<div class="modal fade" id="staticBackdropDele" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="eliminaDistrito.php" method="post" enctype="multipart/form-data">

                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar Distrito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div id="contentModalDelete"></div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-danger">Confirmar</button>
                </div>
        </div>
        <input type="hidden" name="id" id="idDistrito">
        </form >
    </div>
</div>

<?php
bot();
?>
