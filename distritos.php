<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include_once("includes/body.inc.php");



toputili();

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

<!-- Modal do Adicionar-->

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
                    <button onclick="" type="submit" class="btn btn-primary mt-2">Adicionar</button>

                </div>
            </div>
            <?php echo "</form >" ?>
        </div>
    </div>
</div>


<!-- Modal do Eliminar -->
<div class="modal fade" id="staticBackdropDele" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data" class="contact-form">

                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar Distrito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div id="contentModalTextDelete"></div>
                    Tem a certeza que deseja eliminar: <?php echo $dados ["distritoNome"]  ?> ?
                    <div id="contentModalIdDelete"></div>

                </div>
                <div class="modal-footer">
                    <div class="col-lg-7 meio">
                        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="col-lg-5 meio">
                        <button <a href="#" type="button" id="eliminar" class="btn btn-danger pull-right ">Eliminar </button> </a>
                    </div>
                </div>
        </div>
        <input type="hidden" name="id" id="idDistrito">
        </form >
    </div>
</div>


<!-- Modal do Editar-->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="editarlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="contact-form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarlabel">Editar Distrito</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="modal-body">
                        <div class="col-lg-6 mt-3 meio">
                            <input type="text" id="distritoNome">
                        </div>
                        <div class="col-lg-6 mt-3 meio">
                        </div>
                    </div>
                </div>
                <div class="modal-footer mt-2">
                    <div class="col-lg-7 meio">
                        <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="col-lg-5 meio">
                        <button
                        <a href="#" type="button" id="save" class="btn btn-primary mt-2">Alterar </button> </a>

                    </div>
                    <input type="hidden" id="distritoId">
            </form>
        </div>
    </div>
</div>
</div>
<?php
bot();
?>
<!-- script para o JQuery e AJAX -->

<script>

   /* function confirmaElimina(id) {
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
    }; */


    $('document').ready(function () {
        $('#search').keyup(function () {
            fillTableDistritos(this.value);
        });
        fillTableDistritos();
    })

    //------------------------ Tentativa de Eliminar Mais ou Menos correta---------------------------//

    $(document).ready(function () {
        $(document).on('click', 'a[data-role=eliminar]', function () {
            var id = $(this).data('id');
            var distritoNome = $('#' + id).children('td[data-target=distritoNome]').text();
            var distritoId = $('#' + id).children('td[data-target=distritoId]').text();

            $('#contentModalTextDelete').val(distritoNome);
            $('#contentModalIdDelete').val(distritoId);
            $('#idDistrito').val(id);
            $('#staticBackdropDele').modal('toggle');
        });

        $('#eliminar').click(function () {
            var id = $('#idDistrito').val();
            var distritoNome = $('#contentModalTextDelete').val();
            var distritoId = $('#contentModalIdDelete').val();

            $.ajax({
                url: "AJAX/AJAXDeleteDistrito.php",
                method: "post",
                data: {idDistrito: id, contentModalTextDelete: distritoNome, contentModalIdDelete: distritoId},
                success: function (response) {
                    $('#' + id).children('td[data-target=distritoId]').val(distritoId);
                    $('#' + id).children('td[data-target=distritoNomes]').val(distritoNome);
                    $('#staticBackdropDele').modal('toggle');
                }
            })
        })
    });

    //----------------- Tentativa Bem feita pelo youtube ---------------//
    $(document).ready(function () {
        $(document).on('click', 'a[data-role=update]', function () {
            var id = $(this).data('id');
            var distritoNome = $('#' + id).children('td[data-target=distritoNome]').text();

            $('#distritoNome').val(distritoNome);
            $('#distritoId').val(id);
            $('#editar').modal('toggle');
        });

        // update na database

        $('#save').click(function () {
            var id = $('#distritoId').val();
            var distritoNome = $('#distritoNome').val();

            $.ajax({
                url: "AJAX/AJAXEditDistritos.php",
                method: "post",
                data: {distritoNome: distritoNome, distritoId: id},
                success: function (response) {
                    $('#' + id).children('td[data-target=distritoNome]').text(distritoNome);
                    $('#editar').modal('toggle');
                }
            })
        })
    });



</script>
</body>
</html>