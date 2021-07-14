<?php
echo "MD5: ".md5($_GET['txt']);
echo "<br>SHA256: ". hash("sha256",$_GET['txt']);
?>