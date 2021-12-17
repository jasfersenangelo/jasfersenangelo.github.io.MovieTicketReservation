<?php
session_start();


if(!isset($_SESSION['id'])){
	 
	header("location:login.php");
	 
}
//if($_SESSION['id']!=1){
 
	//header("location:login.php");
	//}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

 
  <head>
  <meta charset="UTF-8"> <meta name="viewport" content="width=s, initial-scale=1.0">
   
    <link rel="stylesheet" href="./css/bg.css">
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
    <script type="text/javascript" src="script.js"></script>

    <title></title>
  </head>
  <body>
    <div class="banner">
  <form id="Form4" action="" method="POST">
    <div class="box">
      <img src="gmail.png" class="gmail">

  <h1> Kindly Enter your email where we can send your ticket </h1>
 
  <label>Email:</label>
  <input   type="text" name="em" required placeholder="ex:juandelacruz@gmail.com" value=""  ><br><br>
</div>
			
      <div class="btnLogin"> 
      <input type="submit"  name="btnbuy" value="Buy Ticket" >
</div>
	 </form>
  </div>
 <script type="text/javascript">	 
 
      $(".btnbuy").on("click",function(){
          alert("We have send your ticket on your Email! Thank you!");
		 
        });
	
 
	    </script>
  </body>
  
  
</html>


<?php
 require ("db/connection.php"); //to connect to db
 
 
if(isset($_POST['btnbuy'])){
 $email=$_POST['em'];
 
 mail($email,'Movie Ticket Number 01287', 'Thank you for booking a ticket with us! Enjoy the movie and relax! ','From: Serrakura@gmail.com');
	
echo '<script>
alert(" Thank you for buying a Ticket. We send your ticket to your email: '.$email.'! ");'.

'window.location.href="indexUser.php";
</script>';

 


 
}
?>