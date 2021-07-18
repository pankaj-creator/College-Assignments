<?php
	include('connection.php');
	ob_start();
	session_start();
	if($_SESSION['name']!='nasir'){
		header('location: index.php');
	}

?>

<?php
	if(isset($_POST['btn'])){
		$std_id=$_POST['std_id'];
		$name=$_POST['name'];
		$dept=$_POST['dept'];
		$level=$_POST['level'];
		$term=$_POST['term'];
		$sql="insert into student(std_id,password,name,dept,level,term)values('$std_id','$std_id','$name','$dept','$level','$term')";
		$query=mysqli_query($connect,$sql);
		if($query){
			$msg="data successfully inserted";
		}
		else{
			$msg= 'query problem';
		}
	}
 ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Baiust Result System</title>
		<link rel="stylesheet" href="style.css" />

		<style type="text/css">
		#form{
			width:450px;
			margin-left: 300px;

		}
		input[type=text]{
			width:300px;
			margin-bottom:15px;
			padding:10px;

		}
		input[type=submit]{
			padding:5px 10px 5px 10px;;
			margin-bottom:10px;
		}
		</style>

</head>
	<body>
		<div class="main_wrapper bg_header">
			<div class="wrap">
				<header>
					 <div id="header">
							<h3>Bangladesh Army International University of Science And Technology</h3>
					</div>
				</header>
			</div>
		</div>


		 <div class="main_wrapper bg_nav">
			<div class="wrap">
				<nav>
					<div id="nav">
						<ul>
							<li><a href="new2.php">Home</a></li>
							<li><a href="add.php">Add result</a></li>
							<li><a href="show.php">Show result</a></li>
							<li><a href="#">Add Student</a></li>
							<li><a href="addTeacher.php">Add Teacher</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>

		<div class="main_wrapper bg_section">
			<div class="wrap">
				 <section id="form">
					 <?php
					 		if (isset($msg)) {
					 			echo $msg;
					 		}
					  ?>
					<form action="" method="post">
					Name:<input type="text" name="name" />
					ID:<input type="text" name="std_id" />
					Department:<input type="text" name="dept" />
					Level:<input type="text" name="level" />
					Term:<input type="text" name="term" />
					<input type="submit" value="Submit" name="btn" />

					</form>
				 </section>
			</div>
		</div>

		<div class="main_wrapper bg_footer">
			<div class="wrap">
				<footer>
					<div id="footer">
						<div id="div1">
							<h2>About us</h2>
							<p>Bangladesh Army International University of Science and Technology (BAIUST), a pioneer university of Bangladesh Army, started its journey from 14 February 2015 with the motto of "Knowledge, Wisdom and Technology".</p>
						</div>
					</div>
				</footer>

			</div>
		</div>
</body>
</html>
