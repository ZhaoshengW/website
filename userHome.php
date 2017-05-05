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
	<script>
		alert("Heelo");
	</script>
	<style>
	</style>
<head>
<?php
	if(isset($_SESSION['message'])){
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}

	
?>
<body>
	<p>Welcome Back! <?php echo $_SESSION['username']; ?> </p>
	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
    <div class="collapse navbar-collapse" id="myNavbar">
	     <ul class="nav navbar-nav navbar-right">
			<li><a href="#about">ABOUT</a></li>
			<li><a href="#services">SERVICES</a></li>
			<li><a href="#portfolio">PORTFOLIO</a></li>
			<li><a href="#pricing">PRICING</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
    </div>
	</div>
</nav>
	
	
</body>
</html>