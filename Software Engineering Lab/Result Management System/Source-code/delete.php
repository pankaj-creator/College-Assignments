<?php 
	include('connection.php');
	 ob_start();
	session_start();
	if($_SESSION['name']!='nasir'){
		header('location: index.php');
	}
	$id=$_REQUEST['id'];
	$sql="delete from result where std_id='$id'";
	$result=mysqli_query($connect,$sql);
	header('location: show_cse_4_1.php');



?>