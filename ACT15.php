<!DOCTYPE html>
<html>
<head>
	<title>ACT 15: PHP - USING ASSOCIATIVE VECTORS</title>
</head>
<body>

<form method="post">
	
Name: <input type="text" name="n"><br>
Password: <input type="password" name="p"><br>
<input type="submit" name="submit">

</form>

<?php

	$user[0]=array('name'=>'primer','password'=>'primer');
	$user[1]=array('name'=>'segon','password'=>'segon');
	$user[2]=array('name'=>'tercer','password'=>'tercer');
	$user[3]=array('name'=>'quart','password'=>'quart');
	$user[4]=array('name'=>'quint','password'=>'quint');

	$n = $_REQUEST["n"];
	$p = $_REQUEST["p"];

	if ($n == $user["name"]) {
		if ($p == $user["password"]) {
			echo "Login correct";
		} else {
			echo "Error, password incorrect";
		}
	} else {
		echo "Error, username doesn't exist";
	}


?>

</body>
</html>