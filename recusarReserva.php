<?php
include_once("includes/body.inc.php");


$id=intval($_GET['id']);
include_once ("includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PASSWORD,DATABASE);

$sql="update reservas set reservaEstado ='eliminar' where reservaId=".$id;

mysqli_query($con,$sql);
header( "location:".$_SERVER['HTTP_REFERER']);
?>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>
<?php

?>
