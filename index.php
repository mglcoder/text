<?php
	$msg="";
	function test_input($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlentities($data);
		return $data;
	}
	if(isset($_POST['regbtn'])){
		if(empty($_POST['name'])){
			$msg.="Name is Required<br>";
		}else{
			$name=test_input($_POST['name']);
			if(!preg_match("/^['a-zA-Z ']*$/",$name)){
				$msg.="Only Character<br>";
			}
		}
		if(empty($_POST['eml'])){
			$msg.="Email is Required<br>";
		}else{
			$eml=test_input($_POST['eml']);
			if (!filter_var($eml, FILTER_VALIDATE_EMAIL)) {
				$msg.="Invaild Email Format<br>";
			}
		}
		if(empty($_POST['phone'])){
			$msg.="Phone is Required<br>";
		}else{
			$phone=test_input($_POST['phone']);
			if(!preg_match("/^['0-9']*$/",$phone)){
				$msg.="Only digites is requried<br>";
			}
			if((strlen($_POST['phone'])!=10)){
				$msg.="Only 10 digite number<br>";
			}
		}
		if(empty($_POST['jobt'])){
			$msg.="Job Title is Required<br>";
		}else{
			$jobt=test_input($_POST['jobt']);
		}
		if(empty($_POST['ints'])){
			$msg.="Industries is Required<br>";
		}else{
			$ints=test_input($_POST['ints']);
		}
		if(empty($_POST['tson'])){
			$msg.="Topic Suggestion is Required<br>";
		}else{
			$tson=test_input($_POST['tson']);
		}
		if($msg==""){
			$sql = "INSERT INTO com(`name`,`eml`,`phone`,`jobt`,`ints`,`tson`) 
			VALUES('$name','$eml','$phone','$jobt','$ints','$tson') ";
			$conn=mysqli_connect('localhost','root','','company');
			if(mysqli_query($conn,$sql)){
				$msg.="SUCCESSFULLY RECORD<BR>";
			}else{
				echo "Not Rcord";
			}
		}
	}

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Allahabad"/>
	<link rel="stylesheet" href="fa/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
	<style>
		.form-group input{
			border-radius:20px;
		}
	</style>
<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item"><a class="nav-link px-4 text-info" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link px-4 text-info font-12" href="table.php">Table</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-4 mx-auto mt-5">
			<p class="text-center"><?php echo $msg; ?></p>
				<h6 class="text-center">Suggest Topic</h6>
				<form class="card border-secondary mt-3" action="" method="post" autocomplete="">
					<div class="form p-4">
						<div class="form-group">
							<input type="text" placeholder="Name" name="name" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Email" name="eml" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Phone" name="phone" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Job Title" name="jobt" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Industries" name="ints" class="form-control">
						</div>
						<div class="form-group">
							<input type="text" placeholder="Topic Suggestion" name="tson" class="form-control">
						</div>
						<div class="d-flex justify-content-center">
							<input type="submit" value="submit" name="regbtn">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="js/jquery.js">
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>