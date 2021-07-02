<?php
	include('connection.php');
	//admin login
	if(isset($_POST['submit_btn'])){
		$uname=$_POST['uname'];
		$password=$_POST['psw'];
		$sql="select * from admin_login where email='$uname' and password='$password'";
		$result=mysqli_query($connect,$sql);

		if(mysqli_num_rows($result)>0){
			session_start();
			$_SESSION['name']='nasir';
			$_SESSION['uname']='$uname';
			$_SESSION['pass']='$password';
			header('location: new2.php');
		}
		else{
			$msg="Username or Password does not macth";
		}
	}

	//student login
	if(isset($_POST['std_login'])){
		$std_id=$_POST['std_id'];
		$std_password=$_POST['std_password'];
		$sql="select * from student where std_id='$std_id' and password='$std_password'";
		$result=mysqli_query($connect,$sql);

		if(mysqli_num_rows($result)>0){
			session_start();
			$_SESSION['std_session']=$std_id;
			header('location: std_result.php');
	}
}


//teacher login
if(isset($_POST['teacher_login'])){
	$teacher_email=$_POST['teacher_email'];
	$teacher_password=$_POST['teacher_password'];
	$sql="select * from teacher where email='$teacher_email' and password='$teacher_password'";
	$result=mysqli_query($connect,$sql);
	$teacher_id=mysqli_fetch_assoc($result);

	if(mysqli_num_rows($result)>0){
		session_start();
		$_SESSION['teacher_session']=$teacher_id['id'];
		header('location: teacher.php');
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
		#teach{
			display: none;
		}
		#std{
			display:none;
		}


	</style>

</head>
<body>
		<!--
		<div class="main_wrapper">
			<div class="wrap">

			</div>
		</div>
		-->
		<div class="main_wrapper bg_header">
			<div class="wrap">
				<header>
					<div id="header">
						<h3>Bangladesh Army International University of Science And Technology</h3>
					</div>
				</header>
			</div>
		</div>

		<div class="main_wrapper bg_content">
			<div class="wrap">

				<div id="content_wrap">

					<div id="content1">
							<h2>Admin Login</h2>

							<form action="" method="post">

								<div class="container">
									<label for="uname">
									<b>Username</b>
									</label>
									<input type="text" name="uname" required>

									<label for="psw"><b>Password</b></label>
									<input type="password" name="psw" required>
									<button type="submit" name="submit_btn">Login</button>
								</div>
								<div>
									<?php if(isset($msg)){ echo $msg; }?>
								</div>
							</form>
					</div>
					<div id="content2">
						<select name="" id="chose" onchange="teacher()">
							<option selected disabled>Chose</option>
							<option  value="teacher">Teacher</option>
							<option  value="student">Student</option>
						</select>

						<div id="teach">


							<div>
							<p>Teacher Login</p>
							<form  action="" method="post">
								Email<input type="text" name="teacher_email" />
								Password<input type="password" name="teacher_password" />
								<input type="submit" value="Login" name="teacher_login"/>

							</form>
							</div>
						</div>


						<div id="std">

							<div id="login1">
							<p>Student Login</p>
							<form  action="" method="post">


							Student Id<input type="text" name="std_id" />
							Password<input type="password" name="std_password" />
							<input type="submit" value="Login" name="std_login"/>
							</form>
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
		<script type="text/javascript">
			function teacher(){
				var get_val = document.getElementById("chose").value;
				if(get_val == 'teacher'){
					document.getElementById("teach").style.display="block";
					document.getElementById("std").style.display="none";
				}
				if(get_val == "student"){
					document.getElementById("std").style.display="block";
					document.getElementById("teach").style.display="none";
				}
			}


		</script>

</body>
</html>
