<!DOCTYPE html>
<html>
<head>
	<title>ACT 08: PHP - RADIO Form Control</title>
</head>
<body>

<?php

if(isset($_REQUEST['radio1'])) {
	echo $_REQUEST['nom'].", La seva educacio es 'No Studies'";
}
elseif(isset($_REQUEST['radio2'])) {
	echo $_REQUEST['nom'].", La seva educacio es 'Primary School'";
}
elseif(isset($_REQUEST['radio3'])) {
	echo $_REQUEST['nom'].", La seva educacio es 'Secondary School'";
}
elseif(isset($_REQUEST['radio4'])) {
	echo $_REQUEST['nom'].", La seva educacio es 'University'";
}


?>

</body>
</html>