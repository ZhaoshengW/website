<!---created by Zhaosheng Wang--->
<?php
	session_destroy();	
	session_start();
	$_SESSION['message'] = "You have succesfully logged out.";
	header("location: mainPage.php");
	
?>