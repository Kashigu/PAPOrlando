<?php
include_once("includes/body.inc.php");
toposingle();

?>

<?php
if(isset($_GET['erro'])){
$erro = intval($_GET['erro']);
}
$id=intval($_GET['id']);
$sql = "select * from perfis where perfilId=".$id;
$resultPerfis = mysqli_query($con, $sql);
$dadosPerfis = mysqli_fetch_array($resultPerfis);
if (isset($erro)){
if ($erro = 1){
    alert("Nova palavra passe errada ou dados insuficientes");
}
}
?>

<section class="contact-section spad">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="confirmaEditaUtilizador.php" class="contact-form" method="post" enctype="multipart/form-data" id="frmEdita"> <!-- (class importante ) falta poder clicar na imagem para trocar!-->

                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <div>
                        <img src="<?php echo $dadosPerfis['perfilAvatar'] ?>"  class="center" id="output_image">
                        <div class="col-lg-3 ladocentro">
                            <input type="file" id="perfilAvatar" name="perfilAvatar" accept="image/*" onchange="preview_image(event)" >
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
                            <span id="MSG" ></span>
                            <input type="password"  id="perfilOld" name="perfilOld" placeholder="Atual Palavra-passe">
                        </div>
                        <div class="col-lg-6">
                            <input type="password" id="perfilPalavra" name="perfilPalavra" placeholder="Nova Palavra-passe">
                        </div>
                        <div class="col-lg-6">

                            <input type="password" id="ConfirmaperfilPalavra" name="ConfirmaperfilPalavra" placeholder="Confirmação Nova Palavra-passe">
                            <span id="errorMsgSS"></span>
                        </div>
                        <div class="col-lg-4 meio">
                            <button onclick="def(<?php echo $id ?>)" type="button">Confirmar alterações </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
bot(HOME);
?>
