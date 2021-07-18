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
		<link rel="stylesheet" href="style.css"/>

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
				<div id="content">
					<div>
						<?php
							if(isset($msg)){
								echo $msg;
							}
						?>
					</div>

							<div class="table_container">
								<table style="width:100%">
								  <tr>
									<th>STUDENT ID</th>
									<th>Level</th>
									<th>Term</th>
									<th>CSE_400</th>
									<th>CSE_401</th>
									<th>CSE_402</th>
									<th>CSE_403</th>
									<th>CSE_404</th>
									<th>CSE_405</th>
									<th>CSE_406</th>
									<th>CSE_407</th>
									<th>CSE_413</th>

									<th>GPA</th>

								  </tr>
								  <?php
									$sql="select * from result_4_1";
									$result=mysqli_query($connect,$sql);

									while($data=mysqli_fetch_assoc($result)){
										?>
											<tr>
												<td><?php echo $data['std_id']; ?></td>
												<td><?php echo $data['level']; ?></td>
												<td><?php echo $data['term']; ?></td>
												<td><?php echo $data['cse_400']; ?></td>
												<td><?php echo $data['cse_401']; ?></td>
												<td><?php echo $data['cse_402']; ?></td>
												<td><?php echo $data['cse_403']; ?></td>
												<td><?php echo $data['cse_404']; ?></td>
												<td><?php echo $data['cse_405']; ?></td>
												<td><?php echo $data['cse_406']; ?></td>
												<td><?php echo $data['cse_407']; ?></td>
												<td><?php echo $data['cse_413']; ?></td>

												<td><?php echo $data['gpa']; ?></td>

											  </tr>

										<?php
									}
								  ?>

								</table>
							</div>

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
