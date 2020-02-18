<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php $f=fopen("pizza.txt","a") or die("File Error");

	fputs($f,$_REQUEST['n']);
	fputs($f,"\n");
	fputs($f,$_REQUEST['address']);
	fputs($f,"\n");
	fputs($f,$_REQUEST['c1']);
	fputs($f,"\n");
	fputs($f,$_REQUEST['sel']);
	fputs($f,"\n");
	fputs($f,$_REQUEST['c2']);
	fputs($f,"\n");
	fputs($f,$_REQUEST['sel2']);
	fputs($f,"\n");
	fputs($f,$_REQUEST['c3']);
	fputs($f,"\n");
	fputs($f,$_REQUEST['sel3']);
	fputs($f,"\n");

	$p = $_REQUEST['sel']*5.50;
	$n = $_REQUEST['sel2']*6.75;
	$m = $_REQUEST['sel3']*4.75;
	$p = $p+$n+$m;
	echo "Total price is: ".$p;
	?>
</body>
</html>