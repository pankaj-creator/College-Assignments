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
						 <li><a href="new2.php">Home</a></li>
						<li><a href="add.php">Add result</a></li>
						<li><a href="show.php">Show result</a></li>
						<li><a href="addTeacher.php">Add Teacher</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</div>
		    </nav>
		</div>
	</div>

	<div class="main_wrapper bg_content">
		<div class="wrap">
			<div id="content_wrap">
				<div id="content1">
					<h2>Level/Term:</h2>
					<ul id="lt">
						<li><a href="#">Level-1/Term-1</a></li>
						<li><a href="#">Level-1/Term-2</a></li>
						<li><a href="#">Level-2/Term-1</a></li>
						<li><a href="#">Level-2/Term-2</a></li>
						<li><a href="#">Level-3/Term-1</a></li>
						<li><a href="#">Level-3/Term-2</a></li>
						<li><a href="cse41.php">Level-4/Term-1</a></li>
						<li><a href="#">Level-4/Term-2</a></li>

					</ul>
				</div>
			</div>
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
