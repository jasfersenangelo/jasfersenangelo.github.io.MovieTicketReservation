<?php
	require("config/connect.php");

	

$a=$_POST['mid'];

$a2=$_POST['mticket'];
$a3=$_POST['mtitle'];
$a4=$_POST['mgenre'];
$a5=$_POST['mdirector'];
$a6=$_POST['mlanguage'];
$a7=$_POST['myear'];
$a8=$_POST['mproduction'];
$a9=$_POST['mset'];
$a10=$_POST['mday'];
 
 

	$date = date_create(); 
	$stamp = date_format($date,'YmdHis');
	$temp = $_FILES['myfile']['tmp_name']; 
	$directory = "upload/" . $stamp . $_FILES['myfile']['name'];
	$aP=$directory;
	move_uploaded_file($temp,$directory);




$query = "INSERT INTO movies 
(mid,availticket,title,genre,director,language,year,production,numset,poster,dayavail)  
			VALUES($a,'$a2' ,'$a3','$a4','$a5','$a6',$a7,'$a8',$a9,'$aP','$a10')";

	mysqli_query($connection,$query);

header('location:indexAdmin.php');
?>