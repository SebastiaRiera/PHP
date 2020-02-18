<!DOCTYPE html>
<html>
<head>
	<title>ACT 29: PHP - Cookie Creation and Reading</title>
</head>
<body>
	<form action="ACT29_2.php" method="post">
		Username:<input type="text" name="n">
		<br>
		<input type="submit" value="Create cookie">
	</form>
	<?php
	if (isset($_COOKIE["nom"])) 
	echo $_COOKIE["nom"]; 
	?>
</body>
</html>