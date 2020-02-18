<?php

	require('connexio.php');
	$sql = "DELETE FROM tipus_lloc WHERE id='".$_REQUEST['id']."'";
	mysqli_query($con, $sql) or die();
	require('close.php');
	
	header("location: taulaTipus_lloc.php");
	exit();

?>