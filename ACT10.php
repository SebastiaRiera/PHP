<!DOCTYPE html>
<html>
<head>
	<title>ACT 10 - PHP: SELECT Form Control</title>
</head>
<body>	
	<form method="post" action="Ex10.php">
  	First name:<br>
  	<input type="text" name="n" value="Mickey">
	<select name="sal">
	<option value="1-1000€">1-1000€</option>
	<option value="1001-3000€">1001-3000€</option>
	<option value="+3000€">+3000€</option>
	</select>
	<br><br>
 	 <input type="submit" value="Send">
	</form>
	<?php
	echo $_REQUEST['n']."<br>";
	if ($_REQUEST["sal"] == "+3000€") {
		echo "El teu salari es: ".$_REQUEST["sal"]." has de paagar";
	} else {
		echo "El teu salari es: ".$_REQUEST["sal"];
	}
	?>
</body>
</html>