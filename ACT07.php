<!DOCTYPE html>
<html>
<head>
	<title>Act 7: PHP - Sending Form Data</title>
</head>
<body>

<?php

if ($_REQUEST['edat']>=18) {
	echo $_REQUEST['nom']." Ets major d'edat";
}

else {
	echo $_REQUEST['nom']." Ets menor d'edat";
}

?>

</body>
</html>