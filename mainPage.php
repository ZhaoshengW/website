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
		//$(document).ready(function(){
			//$('#message').modal('show');
		//});
		//alert("");
	</script>
<head>

<body>
<?php  
	session_start();
	if(isset($_SESSION['message'])){   
		$_SESSION['message']."<br>";
		unset($_SESSION['message']);
	}
?>		


	<div class="modal fade" id="message" >
		<div class="modal-dialog">
			<div class = "modal-content">
				<div class = "modal-header">
					<button type = "button" class = "close" data-dismiss = "modal"> X</button>
					<h1> Sign In</h1>
				</div>
					<div class="modal-body">
						Username:
						<input type="text" class="form-control" name="username" placeholder="username" >
					</div>
					<div class="modal-footer">
					  <button type="submit" class="btn btn-default" name="login_btn" value="login">Sign In </button>
					  <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>				  
					</div>
				
			</div>
		</div>
	</div>
	
<!--nav class="navbar navbar-default navbar-fixed-top"-->
	<img src="imgFolder\bunny.gif" alt="bunny" style="width:64px;height:64px;">
	<img src="imgFolder\littlePlant.gif" alt="littlePlant" style="width:64px;height:64px; ">
	
	<div class="container-fluid">
	
	<a class="navbar-brand" href="#">Home</a>
	
	<!-------Header-------->
	<ul class="nav navbar-nav navbar-right">
		<li><button type="button" class="btn btn-info" style="margin:8px;" data-toggle="modal" data-target="#signInModal"><span class="glyphicon glyphicon-user"></span> Sign in</button></li>
		<li><button type="button" class="btn btn-info" style="margin:8px;" data-toggle="modal" data-target="#registerModal"> Create an account</button></li>
	</ul>
	<!--signIn Modal--->
	
	<div class="modal fade" id="signInModal" >
		<div class="modal-dialog">
			<div class = "modal-content">
				<div class = "modal-header">
					<button type = "button" class = "close" data-dismiss = "modal"> X</button>
					<h1> Sign In</h1>
				</div>
				<form action="http://localhost:1234/login.php" method="post">
					<div class="modal-body">
						Username:
						<input type="text" class="form-control" name="username" placeholder="username" >
						Password:
						<input type="text" class="form-control" name="pw" placeholder="password">
					</div>
					<div class="modal-footer">
					  <button type="submit" class="btn btn-default" name="login_btn" value="login">Sign In </button>
					  <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>				  
					</div>
				</form>
			</div>
		</div>
	</div>
	<!------register Modal--------->
	<div class="modal fade" id="registerModal" >
		<div class="modal-dialog">
			<div class = "modal-content">
				<div class = "modal-header">
					<button type = "button" class = "close" data-dismiss = "modal"> X</button>
					<h1>Welcome!</h1>
				</div>
				<form action="http://localhost:1234/register.php" method="post">
					<div class="modal-body">
						Username:
						<input type="text" class="form-control" name="username" placeholder="username" >
						Password:
						<input type="text" class="form-control" name="pw" placeholder="password">
						Confirmed your password:
						<input type="text" class="form-control" name="confirmedPassword" placeholder="password" >
						Hobbies:
						<input type="text" class="form-control" name="hobbies" placeholder="hobbies">						
					</div>
					<div class="modal-footer">
					  <button type="submit" class="btn btn-default" name="register_btn" value="login">Create the account </button>
					  <button type="button" class="btn btn-default" data-dismiss="modal"> Cancel</button>				  
					</div>
				</form>
			</div>
		</div>
	</div>
	<form class="navbar-form navbar-right" role="search">
		<div class="form-group input-group">
		  <input type="text" class="form-control" placeholder="Search..">
		  <span class="input-group-btn">
			<button class="btn btn-default" type="button">
			  <span class="glyphicon glyphicon-search"></span>
			</button>
		  </span>        
		</div>
	  </form>	
	</div>
<!---/nav--->
</body>
</html>