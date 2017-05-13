<!----Created by Zhaosheng Wang------>
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
		$(document).ready(function () { 
			$('#registerShowPassword').click(function (){ 
			$('#registerPasswordID').attr('type', $(this).is(':checked') ? 'text' : 'password'); 
			$('#registerConfirmedPasswordID').attr('type', $(this).is(':checked') ? 'text' : 'password'); 
			}); 
			$('#showPassword').click(function (){ 
			$('#passwordID').attr('type', $(this).is(':checked') ? 'text' : 'password');  
			}); 
		}); 
	</script>
</head>

<body>	
	
<!--nav class="navbar navbar-default navbar-fixed-top"-->
	<div>
	<img src="imgFolder\bunny.gif" alt="bunny" style="width:64px;height:64px;">
	<img src="imgFolder\littlePlant.gif" alt="littlePlant" style="width:64px;height:64px; ">
	</div>
	<p id = "date" style = "color: blue; font-size:20px ">loading</p>
	<script>
		function showTime(){
			var date = new Date();
			var hours = date.getHours();
			var mins = date.getMinutes();
			var seconds = date.getSeconds();
			document.getElementById("date").innerHTML = date.toDateString()+ " " + hours + ":" + mins + ":" +seconds;
		}	
		setInterval("showTime()",1000);
	</script>
	</div>
	
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
						<input type="password" class="form-control" name="pw" placeholder="password" id = "passwordID">
						<input type="checkbox" id = "showPassword">Show password
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
						Nickname:
						<input type="text" class="form-control" name="nickname" placeholder="nickname" >
						Username:
						<input type="text" class="form-control" name="username" placeholder="username" >
						Password:
						<input type="password" class="form-control" name="pw" placeholder="password" id = "registerPasswordID" >
						Confirmed your password:
						<input type="password"  class="form-control" name="confirmedPassword" placeholder="password" id = "registerConfirmedPasswordID">
						<input type="checkbox" id = "registerShowPassword"> Show password
						<br></br>
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