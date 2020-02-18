<?php

require('connexio.php');

$sql = "INSERT INTO tipus_lloc (nom) VALUES ('".$_REQUEST['nom']."')";
mysqli_query($con,$sql);
require('close.php');

?>