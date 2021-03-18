<?php
include_once("includes/body.inc.php");
toputili();

?>

<?php

$id=intval($_GET['id']);
$sql = "select * from perfis where perfilId=".$id;
$resultPerfis = mysqli_query($con, $sql);
$dadosPerfis = mysqli_fetch_array($resultPerfis)



?>

<section class="contact-section spad">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="confirmaEditaUtilizador.php" class="contact-form" method="post" enctype="multipart/form-data"> <!-- (class importante ) falta poder clicar na imagem para trocar!-->

                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <div>
                        <img src="<?php echo $dadosPerfis['perfilAvatar'] ?>"  class="center">
                        <div class="col-lg-3 ladocentro">
                            <input type="file" id="perfilAvatar" name="perfilAvatar">
                        </div>
                        <p></p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="text" value="<?php echo $dadosPerfis['perfilNome'] ?>" placeholder="Nome de Utilizador" id="perfilNome" name="perfilNome">
                        </div>
                        <div class="col-lg-12">
                            <input type="email" value="<?php echo $dadosPerfis['perfilEmail'] ?>" placeholder="Email" id="perfilEmail" name="perfilEmail">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" value="<?php echo $dadosPerfis['perfilLocalidade'] ?>" placeholder="Localidade" id="perfilLocalidade" name="perfilLocalidade">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" placeholder="Atual Palavra-passe">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" placeholder="Nova Palavra-passe">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" placeholder="Comfirmação Nova Palavra-passe">
                        </div>
                        <div class="col-lg-6">
                            <button type="submit">Confirmar alterações </button>
                        </div>
                </form>
                <div class="col-lg-6  contact-form">
                    <button> <a onclick="eliminaUtilizador(<?php echo $dadosPerfis['perfilId'];?>)" >Eliminar Conta </a></button>
                </div>
            </div>
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
                    <h5 class="modal-title" id="staticBackdropLabel">Eliminar Conta</h5>
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
                        <button onclick="EliminaTableUtilizador();" type="button" id="eliminar"
                                class="btn btn-danger pull-right ">Eliminar
                        </button>
                    </div>
                </div>
        </div>
        <input type="hidden" id="PerfilID">
        </form >
    </div>
</div>


<?php
bottom();
?>
