<!DOCTYPE html>
<html>
<head>
	<title>Editar tipus_lloc</title>
</head>
<body>

<?php 
	require('connexio.php');
	$sql = "SELECT * FROM tipus_lloc WHERE id='".$_GET['id']."'";
	$rs = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($rs);
?>


<h2>Editar tipus_lloc</h2>
<form action="inserttipus_lloc.php" method="post">
Nom: <input type="text" name="nom" value="<?php echo $row['nom']; ?>">
<input type="submit" name="Insert">
</form>
</body>
</html>