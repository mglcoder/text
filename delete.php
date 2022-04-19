<?php
	$conn=mysqli_connect('localhost','root','','company');
	$id=$_GET['id'];
	$sql="DELETE FROM com where id='$id'";
	if(mysqli_query($conn,$sql)){
		header('Location: table.php');
	}else{
		echo "Not Delete Id";
	}

?>