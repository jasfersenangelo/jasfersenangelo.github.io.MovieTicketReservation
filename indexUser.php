<?php
session_start();
if(!isset($_SESSION['id'])){
	header("location:login.php");
}

 
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

 
  <head>
  <meta charset="UTF-8"> <meta name="viewport" content="width=s, initial-scale=1.0">
   
    <link rel="stylesheet" href="./css/style3.css">
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
    <script type="text/javascript" src="script2.js"></script>
<link rel="stylesheet" href="fontawesome/css/all.css">
  
  </head>
  <body> 
  <div class="LAHAT">
          <div class="header">
          	<img src="img2/logo.png" style=" height: 65px; width: 420px; margin-left: 45px;">
		   
		   
		   
		  

 <!--START NG DROP SEARCH -->
 
<div class="dropdown">
 
			<input class="SB search" id="search_text" type="search" name="search" placeholder="Search Movie">
             
  <div class="dropdown-content">
     
	<div id="resultDrop">
	
	 
	 </div>
</div>
</div>
 <div class="eme1">
			<input id="eme" type="submit" name="submitsearch" value="Search" >
 </div>

 
 <!--END NG DROP SEARCH -->
 
  <img class="adminpic" src="img/admin.png">
           <div class="btn1">
	  <!--Ditoo si Admin -->
 
<div class="dropdown">

 <button class="dropbtn" type="button" name="button">
 <?php 
 require'function/Action.php';
 require'db/connection.php';

 echo $_SESSION['displayname'];
 ?>
 </button>
             
  <div class="dropdown-content1">
    <a href="EndSess.php">Log Out</a>
	 </div>
</div>
           </div>
             </div>
<div class="bodyside">	 
	  <h2> Movie Set Schedule</h2>
	  <div class="set">
	  <h3> Set 1 </h3>
	  <p>Start Time: 10:00 AM <br>
		End Time: 12:00 PM</p> 
		
		<h3> Set 2 </h3>
	  <p>Start Time: 12:00 AM<br>
		End Time: 02:00 PM</p> 
		
		<h3> Set 3 </h3>
	  <p>Start Time: 02:00 AM <br>
		End Time: 04:00 PM</p> 
		<h3> Set 4 </h3>
		  
	  <p>Start Time: 04:00 AM <br>
		End Time: 06:00 PM</p>
		
	<h3> Set 5 </h3>
		  
	  <p>Start Time: 06:00 AM <br>
		End Time: 08:00 PM</p> 
 </div>	
		  </div>
		  
		  
	
		  
	 
	   <div class="bodymid">
 <div class="main">
  <div class="top">
 <div class="tmp">
	<?php
	require 'Pnum.php';
	
	?>
	</div>
  </div>
	</div>
 
		<div id="result">
	   
	      </div>
 <div id="result2">
	   
	      </div>

		 

 </div>
	 </div>
	 </div>
   <div id="viewSolo">
			
			</div>
			  <script type="text/javascript">
	  $(document).on('click','.edit',function(e){
		
	 
		 
			

	});
	     </script>
		<div id="footer">
			<h2 style="text-align: center;">Contact Us</h2>
			<div class="social-links">
				<a href="gmail.com"><span>senangelo.jasfer@clsu2.edu.ph</span></a>
				<a href="gmail.com"><span>cruz.ruel@clsu2.edu.ph</span></a>
				<a href="gmail.com"><span>villanueva.ralph@clsu2.edu.ph</span></a>
			</div>
			<p>Copyright 2021 Serrakura |  Copyrights, trademarks and other promotional materials are held by their respective owners and their use is allowed under the fair use clause of the Copyright Law.</p>
		</div>
	   
       </body>

	   </html>
  

