<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="baiust";

$connect=mysqli_connect($servername,$username,$password);
if($connect){
	$dbselect=mysqli_select_db($connect,$database);
	if($dbselect){
		
	}
}
?>
