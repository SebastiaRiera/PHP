<?php

require('connexio.php');

$sql = "SELECT * FROM tipus_lloc";
$rs = mysqli_query($con,$sql);
echo "<table border='1'>";
echo "<th>Id</th><th>Nom</th>";
while($row = mysqli_fetch_array($rs)){
	echo "<tr>";
	echo "<td>".$row['id']."</td>"."<td>".$row['nom']."</td>";
	echo "</tr>";
}
echo "</table>";
require('close.php');

?>