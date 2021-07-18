<?php
	include('connection.php');
	 ob_start();
	session_start();
	if($_SESSION['name']!='nasir'){
		header('location: index.php');
	}
	if(isset($_POST['btn'])){
		$name=$_POST['name'];
		$dept=$_POST['dept'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$gender=$_POST['gender'];

		if($name ==''){
			$mg = "Enter Teacher Name First";
		}else if ($dept == '') {
			$msg="Enter Department First";
		}else if ($email=='') {
			$msg="Enter Email Address";
		}
		else if ($phone=='') {
			$msg="Enter Phone Number";
		}else if ($gender=='') {
			$msg="Enter Gender";
		}else{
			$password=strtolower($dept)."baiust";
			$sql="insert into teacher(name,dept,email,phone,gender,password)values('$name','$dept','$email','$phone','$gender','$password')";
			$query=mysqli_query($connect,$sql);
			if($query){
				$msg="data successfully inserted";
			}
			else{
				$msg= 'query problem';
			}

		}


	}

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Baiust Result System</title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


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
				<div id="wrap">
				<div>
					<?php
						if(isset($msg)){
							echo $msg;
						}
					?>
				</div>
					<div class="row">
						<div class="col-md-6 col-lg-6">
							<form action="" method="post">
								  <div class="form-group">
								    <label for="exampleInputEmail1">Teacher Name</label>
								    <input type="text" class="form-control"  placeholder="Enter Teacher Name" name="name" required>
								  </div>

									<div class="form-group">
								    <label for="exampleInputEmail1">Department</label>

										<select class="form-control" name="dept" required>
										  <option selected disabled>Select Department</option>
											<option value="CSE">CSE</option>
											<option value="EEE">EEE</option>
											<option value="CE">CE</option>
											<option value="DBA">DBA</option>
											<option value="English">English</option>
										</select>
								  </div>

									<div class="form-group">
								    <label for="exampleInputEmail1">Email address</label>
								    <input type="email" class="form-control"  placeholder="Enter Teacher Email Address" name="email" required>
								  </div>

									<div class="form-group">
								    <label for="exampleInputEmail1">Phone</label>
								    <input type="text" class="form-control"  placeholder="Enter Teacher Phone" name="phone" required>
								  </div>

									<div class="form-group">
								    <label for="exampleInputEmail1">Gender</label>

										<select class="form-control" name="gender" required>
										  <option selected disabled>Select Gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>

										</select>
								  </div>


								  <input type="submit" class="btn btn-primary" value="Save" name="btn">
								</form>
						</div>
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
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>
