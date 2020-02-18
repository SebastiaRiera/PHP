<?php

require('connexio.php');

$sql = "UPDATE tipus_lloc SET nom = '".$_REQUEST['nom']."' WHERE id ='".$_REQUEST['id']."'";
mysqli_query($con,$sql);
header("location:taulaTipus_lloc.php");
exit();
require('close.php');


?>