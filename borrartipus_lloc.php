<?php

	require('Connexio.php');
	$sql = "DELETE FROM tipus_lloc WHERE id='".$_REQUEST['id']."'";
	mysqli_query($con, $sql) or die();
	require('close.php');
	
	header("location: taulatipus_lloc.php");
	exit();

?>