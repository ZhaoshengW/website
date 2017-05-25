<!----created by Zhaosheng Wang--->
<?php
	session_start();
	require_once('../mysqli_connect.php');
	
	if(isset($_POST['register_btn'])){	
		$nickname = mysql_real_escape_string($_POST['nickname']);
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['pw']);
		$confirmedPassword = mysql_real_escape_string($_POST['confirmedPassword']);
		$hobbies = mysql_real_escape_string($_POST['hobbies']);
		$ageRange = mysql_real_escape_string($_POST['ageRange']);
		
		$matchedUsername = 0;
        $sql = "SELECT username FROM users";
		$response = mysqli_query($dbc, $sql);
		if($response){
			while($row = mysqli_fetch_array($response)){ 
				if(!strcmp($username,$row['username'])){
					$_SESSION['messageUsername'] = "*Username already existed!";
					//echo '<script>  $('#usernameID').attr('placeholder','Invalid'); </script>'; 
					//echo '<script> document.getElementsByID('usernameID')[0].placeholder = 'Invalid'; </script>';
					//echo '<script> alert("a");</script>';		
					$matchedUsername = 1;
				}
			} 
		}	
		if(strcmp($password,$confirmedPassword)){
			$_SESSION['messagePassword'] = "*Your passwords don't match! Please re-enter again.";
		}else if(!$matchedUsername ){
			$password = md5($password);
			$sql = "INSERT INTO users(nickname,username,password,hobbies,ageRange) VALUES('$nickname','$username','$password','$hobbies','$ageRange')";
			mysqli_query($dbc,$sql);
			$_SESSION['nickname'] = $nickname;
			$_SESSION['username'] = $username;		
			$_SESSION['message'] = "You have succesfully created your account!";
			mysqli_close($dbc);
			header("location: userHome.php"); 		
		}
		
		
	}
	//mysqli_close($dbc);
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
			$('#confirmedPasswordID').attr('type', $(this).is(':checked') ? 'text' : 'password'); 
			}); 
		}); 
		
	</script>
</head>
<body>
<?php
		if(isset($_SESSION['messageUsername'])){
			echo '<p style="color:red;margin: 8px 400px 8px 400px;">'.$_SESSION['messageUsername'].'</p>';
			unset($_SESSION['messageUsername']);
		}
		if(isset($_SESSION['messagePassword'])){
			echo '<br></br><p style="color:red;margin: 8px 400px 8px 400px;">'.$_SESSION['messagePassword'].'</p>';
			unset($_SESSION['messagePassword']);
		}

?>
	<div>
		<form action="http://localhost:1234/register.php" method="post">
		
			<label for = "usernameID"> Nickname</label>
			<input type = "text" name = "nickname" placeholder = "" id = "nicknameID"  required>
			
			<label for = "usernameID"> Username</label>
			<input type = "text" name = "username" placeholder = "" id = "usernameID" required>
			
			<label for = "passwordID"> Password</label>
			<input type = "password" name = "pw" placeholder = "" id = "passwordID" required>
			
			<label for = "confirmedPasswordID"> confirmed your password</label>
			<input type = "password" name = "confirmedPassword" placeholder = "" id = "confirmedPasswordID" required>
			
			<label for = "showPassword"> Show password</label>
			<input type="checkbox" id = "showPassword"> 
			<br></br>
			<label for = "hobbiesID"> Hobbies</label>
			<input type = "text" name = "hobbies" placeholder = "" id = "hobbiesID">
			
			<label for = "ageID"> Age</label>
			<select id="ageID" name="ageRange">     
			  <option value="child">under 13</option>
			  <option value="teenager">13-17</option>
			  <option value="youngAdult" >18-25</option>
			  <option value="adult">26-65</option>
			  <option value="elder">Above 65</option>
			  <option value="can'tTell" selected>Can't tell</option>
			</select>
			
			<input type="submit" name="register_btn" value="register" />
		
		</form>
	</div>
</body>
</html>