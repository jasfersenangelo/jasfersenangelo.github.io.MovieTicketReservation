<?php
	require("config/connect.php");

$a=$_POST['mid'];


$sql1 = " SELECT * FROM movies WHERE mid =$a";
		$res = mysqli_query($connection,$sql1);
		
		$row = mysqli_fetch_assoc($res);
		$replace=$row['poster'];
		$nochange=$row['poster'];

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

	move_uploaded_file($temp,$directory);
	
	$tempp=$_FILES['myfile']['name'];
		if ($_FILES['myfile']['name']==null){
			$a1=$nochange;
		}else{
			$a1=$directory;
		}

$query = "UPDATE movies SET 		
										
								 
										availticket='$a2',
										title='$a3',
										genre='$a4',
										director='$a5',
										language='$a6',
										year=$a7,
										production='$a8',
										numset=$a9,
										poster='$a1',
										dayavail= '$a10'
										 
										WHERE mid = $a";

	mysqli_query($connection,$query);
	if ($tempp!=null){
	unlink($replace);
	}
header('location:indexAdmin.php');
?>