<?php
include_once("includes/body.inc.php");
topocriado();
$id=intval($_GET['id']);
$sql = "Select * from imagens ";
// inner join categorias
$sql.= " where imagemEstabelecimentoId=$id";

?>

<section class="contact-section search-filter spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="criado.php?id=<?php echo $id ?>" class="filter-search filter-search1 filter-search2">
                    <div class="location-search1 col-lg-4 mt-3 ">
                        <h5>Nome das Imagens</h5>
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
<div class="modal fade" id="adicionar" tabindex="-1" aria-labelledby="adicionarlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <form action="confirmaNovaImagem.php" class=contact-form method=post enctype=multipart/form-data>
            <input type="hidden" value="<?php echo $id ?>" name="id">
            <div class="modal-header">
                <h5 class="modal-title" id="adicionarlabel">Adicionar Nova Imagem</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row">
                <div class="modal-body">
                    <div class="col-lg-6 mt-3 meio">

                       <input type=text id="nomeImagem" name=nomeImagem placeholder='Nome da Imagem'>

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
                    <!--onclick="addTableImagens();" -->
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
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar Imagem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                   <span id="idImagem"></span>


                </div>
                <div class="modal-footer">
                    <div class="col-lg-7 meio">
                        <button type="button" class="btn btn-secondary pull-left" data-dismiss="modal">Fechar</button>
                    </div>
                    <div class="col-lg-5 meio">
                        <button
                        <button onclick="DeleteTableImagem();" type="button" class="btn btn-danger mt-2">Eliminar</button>
                    </div>
                </div>
        </div>
        <input type="hidden" id="ImagemID">
        </form >
    </div>
</div>


<!-- Modal do Editar-->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="editarlabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="confirmaEditaImagem.php" class="contact-form" method="post" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarlabel">Editar Imagem</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="row">
                    <div class="modal-body">
                        <div class="col-lg-6 mt-3 meio">
                            <input type="text" id="imagemNome" name="imagemNome">
                        </div>
                        <div class="col-lg-6 mt-3 meio">
                            <input type="file" id="imagemImagem" name="imagemImagem">
                        </div>
                        <input type="hidden" id="imagemId" name="imagemId">
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
bot(GALERIA);
?>
