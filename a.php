<?php

$servername = "localhost";
$username = "root";
$password = "123";
$db = "first";

$lat=$_POST['lat'];
$lon=$_POST['lon'];
$name=$_POST['name'];

// Create connection
/*

In the mysql table, latitude and longitude are double and name is varchar.

*/
$conn = mysqli_connect($servername, $username, $password, $db);
if(!$conn) echo 'fail';
// $selected = mysqli_select_db("examples",$conn);

if($conn){
	//$sql1 = "INSERT INTO using_app VALUES ('$name', (float)$lat, (float)$lon)";
	$sql = "SELECT * FROM using_app";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
		while($row = mysqli_fetch_array($result)) {
        	 //echo $row['name'];
        	 //echo ',';
        	 printf("%f", $row['latitude']);
        	 echo ',';
        	 printf("%f", $row['longitude']);
        	 echo '|';
        	 //echo $row['name']+','+strval($row['latitude'])+','+strval($row['longitude']);
		}
	//echo json_encode($arr);		 
	}
	//$result = mysqli_query($sql1, $conn); if($result) echo '2';

}
mysqli_close($conn);
?>
