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
                        <h5>Nome das Categorias</h5>
                        <input class="location-search1 nice-select1" type="text" id="search">
                    </div>

                    <button type="submit">Voltar</button>
                </form>
            </div>
            <div class="col-lg-12 mt-3" id="tableContent">
            </div>
        </div>
</section>


<!-- Modal do Adicionar -->
<div class="modal fade" id="categoria" tabindex="-1" aria-labelledby="categorialabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <form action="confirmaNovaCategoria.php" class=contact-form method=post enctype=multipart/form-data>

            <div class="modal-header">
                <h5 class="modal-title" id="categorialabel">Adicionar Nova Categoria</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row">
                <div class="modal-body">
                    <div class="col-lg-6 mt-3 meio">

                       <input type=text id="nomeCategoria" name=nomeCategoria placeholder='Nome da Categoria'>

                       <input type=file id="imagem" name="imagem" >

                    </div>
                </div>
            </div>
            <div class="modal-footer mt-2">
                <div class="col-lg-7 meio">
                    <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                </div>
                <div class="col-lg-5 meio">
                    <button  type="submit" class="btn btn-primary mt-2">Adicionar</button>
                    <!--onclick="addTableCategorias();" -->
                </div>
            </div>
            </form >
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

                   <span id="idCategoria"></span>


                </div>
                <div class="modal-footer">
                    <div class="col-lg-7 meio">
                        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="col-lg-5 meio">
                        <button
                        <button onclick="DeleteTableCategorias();" type="button" class="btn btn-danger mt-2">Eliminar</button>
                    </div>
                </div>
        </div>
        <input type="hidden" id="CategoriaID">
        </form >
    </div>
</div>


<!-- Modal do Editar-->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="editarlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="confirmaEditaCategoria.php" class="contact-form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarlabel">Editar Categoria</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="modal-body">
                        <div class="col-lg-6 mt-3 meio">
                            <input type="text" id="categoriaNome" name="categoriaNome">
                        </div>
                        <div class="col-lg-6 mt-3 meio">
                            <input type="file" id="categoriaImagem" name="categoriaImagem">
                        </div>
                        <input type="hidden" id="categoriaId" name="categoriaId">
                    </div>
                </div>
                <div class="modal-footer mt-2">
                    <div class="col-lg-7 meio">
                        <button type="button" class="btn btn-dark mt-2" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="col-lg-5 meio">
                        <button
                        <button  type="submit" class="btn btn-danger mt-2">Alterar</button>
                        <!-- onclick="EditarTableCategorias();"-->
                    </div>

            </form>
        </div>
    </div>
</div>
</div>

<?php
botAdmin(CATEGORIAS);
?>
