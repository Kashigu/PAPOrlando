<?php
include_once("../includes/body.inc.php");
top(PROCURAR);
$txt=addslashes($_POST['txt']);

$sql = "Select * from estabelecimentos where estabelecimentoNome LIKE '%$txt%'";

$result = mysqli_query($con, $sql);
?>



