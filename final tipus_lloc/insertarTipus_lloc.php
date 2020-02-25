<?php
 	include("cap.php");
?>

<div class="container">
	
	<div class="alert alert-primary mt-3" role=alert>
		<h3>FORM INSERT tipus_lloc</h3>
	</div>
	<form action="insertTipus_lloc.php" method="post">
		<div class="form-group">
			Nom: <input type="text" name="nom" class="form-control" placeholder="Introdueix lloc">
			<input type="submit" name="INSERT" class="btn btn-primary">
		</div>
</form>

</div>

<?php
 	include("footer.php");
?>