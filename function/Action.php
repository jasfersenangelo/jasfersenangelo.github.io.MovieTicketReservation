<?php

Class Action{
	
public function confirm(){
	 
 
	 
mail('rurubels015@gmail.com','Test', 'GUMAGANA NA SI BUTTON SEND','From: rueljoseph.cruz@gmai.com');
	 
		
}
	
public function login(){


require ("db/connection.php"); //to connect to db

if(isset($_POST['btnLogin'])){
	$username = $_POST['Iuname']; //Transfering the inputted username to the var username
	$password = $_POST['Iupass'];
	$usertype = "admin";
	$usertype2 = "user";
	$sql = "SELECT * FROM login WHERE usertype = '$usertype' AND uname='$username' AND pass='$password'";
		

$res= mysqli_query($connection,$sql);
if(mysqli_num_rows($res)==1){

$row=mysqli_fetch_assoc($res);

session_start();
$_SESSION['id'] = $usertype;
$_SESSION['displayname'] = $row['uname'];
 
header("location:IndexAdmin.php");



}
else{
	$sql2 = "SELECT * FROM login WHERE usertype = '$usertype2' AND uname='$username' AND pass='$password'";

$res= mysqli_query($connection,$sql2);
if(mysqli_num_rows($res)==1){
	
$row=mysqli_fetch_assoc($res);
session_start();
$_SESSION['id'] = $usertype2;
$_SESSION['displayname'] = $row['uname'];
 
header("location:IndexUser.php");



}

}
}



}	

public function AddUser(){
	
	 require ("db/connection.php");
					
			 	$user=$_POST['Iuname1'];
			 	$pass=$_POST['Iupass1'];
			 		$email= $_POST['email'];
			 		
			 		 		

			 	$query = " INSERT INTO login SET uname='$user',
			 	pass='$pass' ,email ='$email', usertype= 'user' ";
			
if(mysqli_query($connection,$query)){
							
			 				header("Location: Login.php");
			 			}
			 			else{
			 				echo "Data not  Inserted!";
			 			}

}	


 public function Send(){
	 

mail('rurucruz015@yahoo.com','Test', 'GUMAGANA NA SI BUTTON SEND','From: rurucruz015@yahoo.com');

}

}




$ruru = new Action();

?>