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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="websiteStyle.css">
	<script>
		$(document).ready(function(){
			$(".smallScreenNav").on("click",function(){
				$("nav ul li").toggleClass("open");
			});
		});
	</script>
</head>
<body>
	<nav>
		<a class = "smallScreenNav"></a>
		<ul>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="logout.php">Logout</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
	<br></br>
	<p>pppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp
	pppppppppppppppppppppppppppppppppppppppppppppppppppppppp
	pppppppppppppppppppppppppppppppppppppppppppppppppppppppp
	pppppppppppppppppppppppppppppppppppppppppppppppppppppppp
	pppppppppppppppppppppppppppppppppppppppppppppppppppppppp
	pppppppppppppppppppppppppppppppppppppppppppppppppppppppp</p>
	<p>Welcome, <?php echo $_SESSION['nickname']?> </p>
	<div id = "googleMap" style = "width:25%;height:300px;"></div>
	<script>
		function showMap(){
			var googleMapLocation = {center:new google.maps.LatLng(0,0),zoom:4,};
			var mapResult = new google.maps.Map(document.getElementById("googleMap"),googleMapLocation);
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?
	key=AIzaSyCvlr1dpWrH-w4PVUVWmT-s8R3P4d7knfY&callback=showMap"></script>
	
</body>
</html>