<?php
include_once("../includes/body.inc.php");
topAdmin();

$id=intval($_GET['id']);
include_once ("../includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);

echo $sql="update perfis set perfilEstado ='inativo' where perfilId=".$id;

mysqli_query($con,$sql);
header("location:utilizadores.php");
?>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/custom.js"></script>
<?php
botAdmin();
?>
