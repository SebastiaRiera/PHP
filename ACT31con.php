<?php
session_start(); 

require 'conn.php';

$sql="SELECT name FROM ALUMNOS WHERE email='$_REQUEST[email]'";
$result = mysql_query($sql, $con);
if ($row = mysql_fetch_array($result)){
$_SESSION['user']=$row["name"];
}else{
echo "Aquest email no existeix";
}	

require 'desc.php';
?>