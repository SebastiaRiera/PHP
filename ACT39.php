<!DOCTYPE html>
<html>
<head>
	<title>ACT : PHP - Applying Format on Data (PRINTF)</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	Username: <input type="text" name="user"> 
	Email: <input type="text" name="email">
	Salari: <input type="text" name="salari"><br><br>
	<input type="button" name="submit" value="Submit">
</form>


<?php
   
if(isset($_POST['submit'])) {
 if ( isset($_REQUEST['salari'])){ $salari = $_REQUEST['salari']; } 
 else { $salari = 0; };
    printf("salary as a number with 8 digits: %'08d  €<br>",$salari); 
	}
?>

</body>
</html>