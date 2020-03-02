<html> 
<head> 
  <title>ACT 40: PHP - APPLY FORMAT ON A STRING (sprintf)</title> 
</head> 
<style>
   table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 4px;
}

</style>
<body> 
<?php 

function asc($n) { 
$ascii=sprintf("%c",$n); 
return $ascii; 
} 
?> 

<table> 
	<?php
	for ($i=32;$i<=255;$i++){
	 if ($i%32==0){
	 echo "<tr><td>$i  ".asc($i)."</td> ";
	 }else{	
       echo "<td>$i  ".asc($i)."</td> ";
      }

    }
    ?>
</tr> 
  
</table> 
</body>
</html> 