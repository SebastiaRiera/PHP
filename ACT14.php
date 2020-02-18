<!DOCTYPE html>
<html>
<head>
	<title>ACT 14: PHP - READING TXT FILES</title>
</head>
<body>

<h3>PIZZA ORDERS</h3>

<?php
$f=fopen("pizzas.txt","r") or die("File Error");
while (!feof($f)) {
$line=fgets($f);
$line2=nl2br($line);
echo $line2;
}
fclose($f);
?>


</body>
</html>