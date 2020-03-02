<?php session_start();

if (isset($_SESSION['user'])){
   echo "Hola  ".$_SESSION['user'];
        
}else{
	echo "Podeu veure aquesta pàgina";
}



 ?> 