<!DOCTYPE html>
<html>
<head>
	<title>ACT02: PHP-Complex PHP Script</title>
</head>
<body>

<?php

$n=rand(0,10);

if ($n>=5){
	echo "You passed the exam! ";
}
else {
	echo "You failed the exam! ";
}
echo $n;
?>

</body>
</html>