<?php
 	include("cap.php");
?>

<?php 
	require('connexio.php');
	$sql = "SELECT * FROM tipus_lloc WHERE id='".$_GET['id']."'";
	$rs = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($rs);
?>


<div class="container">
	
<div class="alert alert-primary mt-3" role="alert">
	<h3 class="text center">Editar tipus_lloc</h3>
</div>

	<form action="editaTipus_lloc.php" method="post">
		<div class="form-group">
			<input type="hidden" name="id"  value="<?php echo $row['id']; ?>">
			Nom: <input type="text" name="nom" value="<?php echo $row['nom']; ?>">
			<input type="submit" name="Update" class="btn btn-primary">
		</div>
	</form>
</div>

<?php
 	include("footer.php");
?>