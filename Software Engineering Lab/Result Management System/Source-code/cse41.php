<?php
	include('connection.php');
	 ob_start();
	session_start();
	if($_SESSION['name']!='nasir'){
		header('location: index.php');
	}
	if(isset($_POST['btn'])){
		$std_id=$_POST['uid'];

		$level=$_POST['level'];
		$term=$_POST['term'];
		$cse_400=$_POST['cse_400'];
		$cse_401=$_POST['cse_401'];
		$cse_402=$_POST['cse_402'];
		$cse_403=$_POST['cse_403'];
		$cse_404=$_POST['cse_404'];
		$cse_405=$_POST['cse_405'];
		$cse_406=$_POST['cse_406'];
		$cse_407=$_POST['cse_407'];
		$cse_413=$_POST['cse_413'];

		if($std_id ==''){
			$mg = "Enter Student Id First";
		}else if ($level == '' || ($level>=1 && $term<=4) ==false) {
			$msg="Enter a valid level";
		}else if ($term == '' || ($term>=1 && $term<=4) ==false) {
			$msg="Enter a valid term";
		}
		else if ($cse_400 == '' || ($cse_400>=1 && $cse_400<=4) ==false) {
			$msg="Enter a valid Grade Point of cse-400";
		}else if ($cse_401 == '' || ($cse_401>=1 && $cse_401<=4) ==false) {
			$msg="Enter a valid Grade Point of cse-401";
		}else if ($cse_402 == '' || ($cse_402>=1 && $cse_402<=4) ==false) {
			$msg="Enter a valid Grade Point of cse-402";
		}else if ($cse_403 == '' || ($cse_403>=1 && $cse_403<=4) ==false) {
			$msg="Enter a valid Grade Point of cse-403";
		}else if ($cse_404 == '' || ($cse_404>=1 && $cse_404<=4) ==false) {
			$msg="Enter a valid Grade Point of cse-404";
		}else if ($cse_405 == '' || ($cse_405>=1 && $cse_405<=4) ==false) {
			$msg="Enter a valid Grade Point of cse-405";
		}else if ($cse_406 == '' || ($cse_406>=1 && $cse_406<=4) ==false) {
			$msg="Enter a valid Grade Point of cse-406";
		}else if ($cse_407 == '' || ($cse_407>=1 && $cse_407<=4) ==false) {
			$msg="Enter a valid Grade Point of cse-407";
		}else if ($cse_413 == '' || ($cse_413>=1 && $cse_413<=4) ==false) {
			$msg="Enter a valid Grade Point of cse-413";
		}else{

			$std_gpa=(1.50*$cse_400)+(3.00*$cse_401)+(0.75*$cse_402)+(3.00*$cse_403)+(0.75*$cse_404)+(3.00*$cse_405)+(0.75*$cse_406)+(3.00*$cse_407)+(3.00*$cse_413);
			$std_gpa=$std_gpa/18.75;
			$sql="insert into result_4_1(std_id,level,term,cse_400,cse_401,cse_402,cse_403,cse_404,cse_405,cse_406,cse_407,cse_413,gpa)values('$std_id','$level','$term','$cse_400','$cse_401','$cse_402','$cse_403','$cse_404','$cse_405','$cse_406','$cse_407','$cse_413','$std_gpa')";
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
					<form action="" method="post">

							<div class="container">

								<label for="uid">
								<b>Student Id:</b>
								</label>
								<input type="text" name="uid" required>
								level:<input type="text" name="level" required>

								Term:<input type="text" name="term" required>
							    <p style="font-weight:bold">Course Code:</p>
							   CSE-400:<input type="text" name="cse_400" required>
							   CSE-401:<input type="text" name="cse_401" required>
							   CSE-402:<input type="text" name="cse_402" required>
							   CSE-403:<input type="text" name="cse_403" required>
							   CSE-404:<input type="text" name="cse_404" required>
							   CSE-405:<input type="text" name="cse_405" required>
							   CSE-406:<input type="text" name="cse_406" required>
							   CSE-407:<input type="text" name="cse_407" required>
							   CSE-413:<input type="text" name="cse_413" required>


								<input type="submit" value="Save" name="btn">
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
