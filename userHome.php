<!----created by Zhaosheng Wang--->
<?php	
	session_start();

?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<title>For Fun</title>
	<meta charset = "utf-8">
	<meta name = "viewsheet" content = "width = device-width, initial-scale = 1">
	<link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	</style>
</head>
<body>
	<p>Welcome, <?php echo $_SESSION['nickname']?> </p>
	<a href="logout.php">Logout</a>
</body>
</html>