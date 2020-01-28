<!DOCTYPE html>
<html>
<head>
	<title>ACT 12 - PHP: Using Venctors</title>
</head>
<body>
	<?php
	$days= array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
	$dia = date("w");
	echo $days[$dia];
	?>
</body>
</html>