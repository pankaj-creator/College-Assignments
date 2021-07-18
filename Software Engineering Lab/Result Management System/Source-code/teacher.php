<?php
	include('connection.php');
	ob_start();
	session_start();
	if($_SESSION['teacher_session']==''){
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
						<li><a href="logout.php">Logout</a></li>
						<li><a href="teacher.php">Teacher Section</a></li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<div>
		<?php
			$id=$_SESSION['teacher_session'];
			$sql="select * from teacher where id='$id'";
			$result=mysqli_query($connect,$sql);

			$data=mysqli_fetch_assoc($result);
      $dept=$data['dept'];
			?>

		<div style="margin-left:300px;">
			<strong>Name: <?php echo $data['name']; ?></strong><br>
			<strong>Dept: <?php echo $data['dept']; ?></strong><br>
			<strong>Email: <?php echo $data['email']; ?></strong><br>
			<strong>Phone: <?php echo $data['phone']; ?></strong><br>
			<strong>Gender: <?php echo $data['gender']; ?></strong><br>
		</div>
	</div>
<br>
<hr>
<center><strong>Result of <?php echo $data['dept']; ?></strong><br>
</center>


  <div class="main_wrapper bg_content">
		<div class="wrap">

			<div id="content_wrap">
				<div  class="table_container">
						<?php
							$sql="select * from result_4_1";
							$result=mysqli_query($connect,$sql);

							$data=mysqli_fetch_assoc($result);

							if(mysqli_num_rows($result)>0){
								?>
                <div class="main_wrapper bg_content">
              		<div class="wrap">

              			<div id="content_wrap">
              				<div  class="table_container">
              						<?php
              							$sql="SELECT student.std_id, student.name,result_4_1.* FROM student, result_4_1 WHERE student.dept='$dept' AND student.std_id=result_4_1.std_id";
              							$result=mysqli_query($connect,$sql);


              							if(mysqli_num_rows($result)>0){
              								?>
              									 <center>
                                   <table>
                										<tr>
                											<th>Student ID</th>
                											<th>Student Name</th>
                											<th>Level</th>
                											<th>Term</th>
                											<th>GPA</th>
                										</tr>


                									<?php
                                      while ($value=mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tr>
                      										<td><?php echo $value['std_id']; ?></td>
                      										<td><?php echo $value['name']; ?></td>
                      										<td><?php echo $value['level']; ?></td>
                      										<td><?php echo $value['term']; ?></td>
                      										<td><?php echo $value['gpa']; ?></td>

                      									</tr>
                                        <?php
                                      }
                                   ?>
                									</table>
                                 </center>
              								<?php
              							}
              							else{
              								echo "No Result Yet";
              							}

              						?>

              				</div>
              			</div>
              		</div>
              	</div>

								<?php
							}
							else{
								echo "No Result Yet";
							}

						?>

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
