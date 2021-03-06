<?php
include_once("includes/body.inc.php");
toputili();

?>

<section class="contact-section search-filter spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="backoffice.php" class="filter-search filter-search1 filter-search2">
                    <div class="location-search1 col-lg-4 mt-3 ">
                        <h5>Nome das Categorias</h5>
                        <input class="location-search1 nice-select1" type="text" id="search">
                    </div>

                    <button type="submit">Voltar</button>
                </form>
            </div>
            <div id="tableContent">
            </div>
        </div>
</section>







<!-- Modal do Adicionar -->
<div class="modal fade" id="categoria" tabindex="-1" aria-labelledby="categorialabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo "<form action=\"confirmaNovaCategoria.php\" class=\"contact-form\" method=\"post\" enctype=\"multipart/form-data\">";
            ?>
            <div class="modal-header">
                <h5 class="modal-title" id="categorialabel">Adicionar Nova Categoria</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row">
                <div class="modal-body">
                    <div class="col-lg-6 mt-3 meio">
                        <?php
                        echo "<input type=\"text\" name=\"nomeCategoria\" placeholder='Nome da Categoria'><br>";

                        echo "<input type=\"file\" accept=\"image/*\" onchange=\"preview_image(event)\" name=\"logoCategoria\"><br>";
                        echo "<img id=\"output_image\"/><hr>"
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
            <form action="eliminaDistrito.php" method="post" enctype="multipart/form-data" class="contact-form">

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
                    <div class="col-lg-7 meio">
                        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="col-lg-5 meio">
                        <button onclick="confirmaElimina(id)" type="button" class="btn btn-danger">Confirmar</button>
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
                            <input type="text"  id="distritoNome"  >
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
                        <button <a  href="#" type="button" id="save" class="btn btn-primary mt-2">Alterar </button> </a>

                    </div>
                    <input type="hidden" id="distritoId">
            </form>
        </div>
    </div>
</div>
</div>

<?php
bottom();
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
            fillTableCategorias(this.value);
        });
        fillTableCategorias();
    })

    function preview_image(event)
    {
        var reader = new FileReader();
        reader.onload = function()
        {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
</body>
</html>