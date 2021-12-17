<?php
	require("connect.php");

if(isset($_GET['id'])){
		$pid = $_GET['id'];

	$sql ="SELECT * FROM movies WHERE mid='$pid'";
	
		$res = mysqli_query($connection,$sql);
		
		$row = mysqli_fetch_assoc($res);
		$sad=$row['poster'];

	

	$id = $_GET['id'];
	$query = "DELETE FROM movies WHERE mid = '$id'";
	mysqli_query($connection,$query);

	unlink("../".$sad);
	}

	
?>