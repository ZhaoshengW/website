<!----created by Zhaosheng Wang-->
<?php
	session_start();
	require_once('../mysqli_connect.php');
	if(isset($_POST['login_btn'])){	
		
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['pw']);
		$password = md5($password);
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$sqlQuery = mysqli_query($dbc,$sql);
		if(mysqli_num_rows($sqlQuery) == 1){
			$info = mysqli_fetch_array($sqlQuery);
			$_SESSION['nickname'] = $info['nickname'];
			$_SESSION['message'] = "You have succesfully logged in.";
			header("location: userHome.php");
		}else{
			echo '<p style = "color:red;">Invalid username or password!</p>';
			echo '<script>alert("Invalid username or password!");</script>';		
		}		
	}	
?>


<!DOCTYPE html>
<html lang = "en">
<head>
	<title>For Fun</title>
	<meta charset = "utf-8">
	<meta name = "viewsheet" content = "width = device-width, initial-scale = 1">
	<link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>	
		div {
			width: 50%;
			margin: 8px 400px 8px 400px;
			border-radius: 5px;
			background-color: #F0F8FF;
			padding: 10px;
		}
		
		input[type=text], input[type=password], select {
			width: 100%;
			padding: 10px;
			margin: 5px;
			//display: inline-block;
			border: 1px solid #A9A9A9;
			border-radius: 5px;
			//box-sizing: border-box;
		}

		input[type=submit] {
			width: 100%;
			background-color: green;
			color: white;
			padding: 10px;
			margin: 5px 0;
			border-radius: 10px;
			cursor: pointer;
		}

		input[type=submit]:hover {
			background-color: blue;
		}
	
	</style>
	<script>	
		$(document).ready(function () { 
			$('#showPassword').click(function (){ 
			$('#passwordID').attr('type', $(this).is(':checked') ? 'text' : 'password');		
			}); 
		}); 	
	</script>
<head>
<body>

<a class="navbar-brand" href="http://localhost:1234/mainPage.php">Home</a>
<br></br>

<div>
	<form action="http://localhost:1234/login.php" method="post">
		

			
			<label for = "usernameID"> Username</label>
			<input type = "text" name = "username" placeholder = "" id = "usernameID">
			
			<label for = "passwordID"> Password</label>
			<input type = "password" name = "pw" placeholder = "" id = "passwordID">
					
			<label for = "showPassword"> Show password</label>
			<input type="checkbox" id = "showPassword"> 
			<br></br>
			
			<input type="submit" name="login_btn" value="login" />
		
		</form>
	</div>

</body>
</html>