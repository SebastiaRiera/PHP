<?php

require('connexio.php');

$sql = "UPDATE tipus_lloc SET nom = '".$_REQUEST['nom']."' WHERE id ='".$_REQUEST['id']."'";
mysqli_query($con,$sql);
header("location:selecttipus_lloc2.php");
exit();
require('close.php');


?>