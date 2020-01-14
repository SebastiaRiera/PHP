<!DOCTYPE html>
<html>
<head>
	<title>ACT06:PHP-Repetitive Statements</title>
</head>
<body>

<?php

//for

for ($i=1;$i<=10;$i++){
	$m=$i*2;
	echo $m."<br>";
}

//while

$initial=1;
while ($initial<=10){
	$m=$initial*2;
	echo $m."<br>";
	$initial++;

}

//do-while
$initiald=1;
do {
	$m=$initiald*2;
	echo $m."<br>";
	$initiald++;
}while($initiald<=10)


?>

</body>
</html>