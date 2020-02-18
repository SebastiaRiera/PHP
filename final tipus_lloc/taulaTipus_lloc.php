<?php
 	include("cap.php");
?>
<a href='insertarTipus_lloc.php'><button type='button' class='btn btn-dark'><i class='fa fa-plus' aria-hidden='true'></i> Insertar</button></a>
<table id='tl' class='table table-striped table-bordered' style='width:100%'>
		<thead>
			<tr><th>ID</th><th>Nom</th><th>Editar</th><th>Borrar</th></tr>
		</thead>
		<tbody>

<?php

require('connexio.php');

$sql = "SELECT * FROM tipus_lloc";
$rs = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($rs)){
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	echo "<td>".$row['nom']."</td>";
	echo "<td><a href='editarTipus_lloc.php?id=".$row['id']."'><button type='button' class='btn btn-warning'><i class='fa fa-pencil' aria-hidden='true'></i> Editar</button></a></td>";
	echo "<td><a href='deleteTipus_lloc.php?id=".$row['id']."'><button type='button' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i> Borrar</button></a></td>";
	echo "</tr>";
}
require('close.php');
?>
</tbody>
</table>

<script >
	$(document).ready( function () {
    $('#tl').DataTable({
	   dom: 'Bfrtip',
	   buttons: [
	    { 	extend:'copy', 
	       	attr: { id: 'bCopia' } 
	    }, 
	       	'csv', 'excel', 'pdf', 'print'
	    ]
	});
	});
</script>

<?php
 	include("footer.php");
?>

