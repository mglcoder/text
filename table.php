<?php
	$conn=mysqli_connect('localhost','root','','company');
	$sql="SELECT * FROM com";
	$result=mysqli_query($conn,$sql);
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
			<div class="col-md-12 col-xl-12 col-12">
				<table class="table  bg-info table-hover table-dark table striped">
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Job-Title</th>
						<th>Industries</th>
						<th>Topic-Suggestion</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					<?php
						while($row=mysqli_fetch_assoc($result)){
					?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['eml']; ?></td>
						<td><?php echo $row['phone']; ?></td>
						<td><?php echo $row['jobt']; ?></td>
						<td><?php echo $row['ints']; ?></td>
						<td><?php echo $row['tson']; ?></td>
						<td><a href="delete.php?id=<?php echo $row['id']; ?>"onclick="return confirm('Delete this Items')" class="btn btn-primary"><i class="fa fa-trash"></a></td>
						<td><a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o"></a></td>
					</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>
	</div>
	
	
	<script src="js/jquery.js">
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>