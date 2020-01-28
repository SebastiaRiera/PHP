<!DOCTYPE html>
<html>
<head>
	<title>ACT 09: PHP - CHECKBOX Control Form</title>
</head>
<body>
<?php
$x=0;
	echo $_REQUEST['nom']."<br>";
	if(isset($_REQUEST["c1"])){
		echo $_REQUEST["c1"]."<br>";
		$x++;
	}
	if(isset($_REQUEST["c2"])){
		echo $_REQUEST["c2"]."<br>";
		$x++;
	}
	if(isset($_REQUEST["c3"])){
		echo $_REQUEST["c3"]."<br>";
		$x++;
	}
	if(isset($_REQUEST["c4"])){
		echo $_REQUEST["c4"]."<br>";
		$x++;
	}
	echo $_REQUEST['nom']." has seleccionat: ".$x;

?>	
</body>
</html>