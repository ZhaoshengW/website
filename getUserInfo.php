<!----created by Zhaosheng Wang--->
<?php

require_once('../mysqli_connect.php');

$query = "SELECT nickname,username, hobbies, ageRange FROM users";
 
$response = mysqli_query($dbc, $query);
 
if($response){
	echo '<style>
			th{
				background-color: #00BFFF;
			}
			tr:nth-child(odd){background-color:#808080}
		 </style>';
	echo '<a href="http://localhost:1234/mainPage.php">Home</a>
		<br></br>
		<table align="left" cellspacing="0" cellpadding="4">	 
		<tr>
			<th align="left"><b>Nickname</b></td>
			<th align="left"><b>Username</b></td>
			<th align="left"><b>Hobbies</b></td>
			<th align="left"><b>ageRange</b></td>
		</tr>';

while($row = mysqli_fetch_array($response)){
	echo '<tr>
			<td align="left">' . 
			$row['nickname'] . '</td>
			<td align="left">' . 
			$row['username'] . '</td>
			<td align="left">' . 
			$row['hobbies'] . '</td>
			<td align="left">' . 
			$row['ageRange'] . '</td>';
	echo '</tr>';
}
echo '</table>';                                                                                          

} else {
	echo "No data!!!.";
	echo mysqli_error($dbc);
}

mysqli_close($dbc);
?>


