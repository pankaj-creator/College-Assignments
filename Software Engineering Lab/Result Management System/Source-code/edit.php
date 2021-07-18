<?php
	include('connection.php');
	 ob_start();
	session_start();
	if($_SESSION['name']!='nasir'){
		header('location: index.php');
	}
	$id=$_REQUEST['id'];
	$sql="select * from result where std_id='$id'";
	$result=mysqli_query($connect,$sql);
	$data=mysqli_fetch_assoc($result);

	if(isset($_POST['btn'])){
		$p_sem=$_POST['p_semister'];
		$cse_101=$_POST['cse_101'];
		$cse_102=$_POST['cse_102'];
		$cse_103=$_POST['cse_103'];
		$cse_104=$_POST['cse_104'];
		$cse_105=$_POST['cse_105'];
		$cse_106=$_POST['cse_106'];
		$std_gpa=$_POST['gpa'];
		$sql="update result set present_semister='$p_sem',cse_101='$cse_101',cse_102='$cse_102',cse_103='$cse_103',cse_104='$cse_104',cse_105='$cse_105',cse_106='$cse_106',gpa='$std_gpa' where std_id='$id'";
		$query=mysqli_query($connect,$sql);
		if($query){
			$msg="data successfully updated";
		}
		else{
			echo 'query problem';
		}
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
					</div>
							<form action="" method="post">
							<div class="container">
							<?php
							if(isset($msg)){
								echo $msg;
							}
							?>
							<h3><?php echo $data['std_id'];?></h3>
								<b>Present Semester:</b>
								</label>
								<input type="text" name="p_semister" value="<?php echo $data['present_semister'];?>" required>
							    <p style="font-weight:bold">Course Code:</p>
							   CSE-101:<input type="text" name="cse_101" value="<?php echo $data['cse_101'];?>" required>
							   CSE-102:<input type="text" name="cse_102" value="<?php echo $data['cse_102'];?>" required>
							   CSE-103:<input type="text" name="cse_103" value="<?php echo $data['cse_103'];?>" required>
							   CSE-104:<input type="text" name="cse_104" value="<?php echo $data['cse_104'];?>" required>
							   CSE-105:<input type="text" name="cse_105" value="<?php echo $data['cse_104'];?>" required>
							   CSE-106:<input type="text" name="cse_106" value="<?php echo $data['cse_106'];?>" required>
							   CGPA:<input type="text" name="gpa" value="<?php echo $data['gpa'];?>" required>

								<input type="submit" value="Update" name="btn">
							</div>
							</form>

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
