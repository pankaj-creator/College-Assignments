<?php
	include('connection.php');
	ob_start();
	session_start();
	if($_SESSION['name']!='nasir'){
		header('location: index.php');
	}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Baiust Result System</title>
		<link rel="stylesheet" href="style.css" />

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
							<li><a href="#">Home</a></li>
							<li><a href="add.php">Add result</a></li>
							<li><a href="show.php">Show result</a></li>
							<li><a href="form.php">Add Student</a></li>
							<li><a href="addTeacher.php">Add Teacher</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>

		<div class="main_wrapper bg_section">
			<div class="wrap">
				 <section>
					<div id="section">
						<img src="img/img.jpg" alt="" />
					</div>
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
