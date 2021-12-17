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
   
    <link rel="stylesheet" href="./css/style2.css">
    <script type="text/javascript" src="jquery-3.4.1.js"></script>
    <script type="text/javascript" src="script.js"></script>

    <title></title>
  </head>
  <body>
 

	<div class="bbody">
    <div class="container2">
      <div class="main">
 

        <div class="modalbox">
          <div class="mainModal">

              <form id="addForm" action="createRecord.php" method="POST" enctype="multipart/form-data" >
			  <table id="TTT">
                <th colspan=2;>Add Movie </th>
				<tr>
				<td id="tdleft2">
				<br><br>
					<label>Movie ID: </label>
					<input   type="number" name="mid" required placeholder="PID" value="" id="pid"><br><br>
						 
						<label>Movie Poster: &nbsp;&nbsp;&nbsp;</label>
					 <input class = "choose" id = "img-upload" type="file" name="myfile" accept="image/x-png,image/gif,image/jpeg" onchange = "preview()"> <br>
					 
					<div id = "preview" value = "img-preview"></div>
<br><br><br><br><br>
					<label>Movie Ticket: </label>
					<input type="number" name="mticket" required placeholder="Enter Ticket Quantity" value="" id="txtprice"><br>
					<br>
					</td>


					<td id="tdleft">
					<label>Movie Title: </label>
					<input type="text" name="mtitle" required placeholder="Movie Title" value=""><br><br>

						
<br>
					<label>Director: </label>
					<input type="text" name="mdirector" required placeholder="Director" value=""><br><br> 
<label>Production: </label>
					<input type="text" name="mproduction" required placeholder="Production" value=""><br><br> 
									
<label>Genre: </label>
					<!--<input type="text" name="mgenre" required placeholder="Enter Brand" value=""><br><br> 
				!-->	
				<select name="mgenre"  >
  <option value="Action">Action</option>
  <option value="Comedy">Comedy</option>
  <option value="Drama">Drama</option>
  <option value="Fantasy">Fantasy</option>
    <option value="Horror">Horror</option>
	  <option value="Mystery">Mystery</option>
	    <option value="Romance">Romance</option>
		  <option value="Thriller">Thriller</option>
		    <option value="Western">Western</option>
</select>

<br>
				<label>Language: </label>
				<!--	<input type="text" name="mlanguage" required placeholder="Enter Brand" value=""><br><br> 
				-->	<select id="languages" name="mlanguage">
    <option>Select Language</option>
   
    <option value="Chinese">Chinese </option>
	 <option value="English">English </option>
	  <option value="Japanese">Japanese </option>
	  <option value="Filipino">Filipino </option>
	  <option value="Italian">Italian </option>
	  <option value="French">French </option>
	  <option value="Korean">Korean </option>
	    <option value="Spanish">Spanish</option>
		  <option value="Vietnamese">Vietnamese </option>
     
    
</select>
<br>
					<label>Ticket Price: </label>
					<!--<input type="number" name="myear" required placeholder="Enter Brand" value=""><br><br> 
					!-->
					<select id="year" name="myear">
    <option>Price</option>
   
    <option value="250">250</option>
    <option value="270">270</option>
    <option value="300">300</option>
    <option value="350">350</option>
    <option value="400">400</option>
</select>
<br>
					<label>Movie set: </label>
				 <!--	<input type="number" name="mset" required placeholder="Enter Brand" value=""><br><br> 
!-->
				 <select name="mset"  >
  <option value="1">Movie Set 1</option>
  <option value="2">Movie Set 2</option>
  <option value="3">Movie Set 3</option>
  <option value="4">Movie Set 4</option>
    <option value="5">Movie Set 5</option>
</select>
						 
						<br>
				 
							<label>Available Day: </label>
			 
				 <select name="mday"  >
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
	   <option value="Saturday">Saturday</option>
	      <option value="Sunday">Sunday</option>
</select>
					
            
                <br>
				</td>
					</tr>
					<tr>
					<td colspan=2; id="lasttd">
                <div class="butonesC">

                  <input class="butones submit" type="submit" name="button">
                  <button class="butones close" type="button" name="button">Close</button>
                </div>
				</td>
				</tr>
				
				</table>
              </form>
     
          </div>
        </div>


      <div class="modalbox1">
          <div class="mainModal1">

            <form id="editForm" action="updateRecord.php" method="POST" enctype="multipart/form-data" >

			<table id="TTT">
                <th colspan=2;>Edit Product 
			 
				</th>
				<tr>
				<td id="tdleft2">
				<br><br>
				 
					<label>Movie ID: </label>
					
					<input   type="number" name="mid" required placeholder="movie ID" value="" id="pid" readonly><br><br>
						 
											<label>Product Image: &nbsp;&nbsp;&nbsp;</label>
					 <input  class = "choose" id = "img-upload2" type="file" name="myfile" accept="image/x-png,image/gif,image/jpeg" onchange = "preview2()"> <br>
					 
<div id = "preview2" value = "img-preview2"></div>
<div id = "previewedit">
<img id="pic" src="">
</div>
<br><br><br><br><br>
					<label>Movie Ticket: </label>
					<input type="number" name="mticket" required placeholder=" Ticket Quantity" value="" id="txtprice" ><br>
					<br>
					</td>


					<td id="tdleft">
					<label>Movie Title: </label>
					<input type="text" name="mtitle" required placeholder="Enter Name" value="" ><br><br>

						
					<label>Director: </label>
					<input type="text" name="mdirector" required placeholder="Enter Brand" value=""><br><br> 
					
					<label>Production: </label>
					<input type="text" name="mproduction" required placeholder="Enter Brand" value=""><br><br> 

					<label>Language: </label>
					<!--	<input type="text" name="mlanguage" required placeholder="Enter Brand" value=""><br><br> 
				-->	<select id="languages" name="mlanguage">
    <option>Select Language</option>
   
    <option value="Chinese">Chinese </option>
	 <option value="English">English </option>
	  <option value="Japanese">Japanese </option>
	  <option value="Filipino">Filipino </option>
	  <option value="Italian">Italian </option>
	  <option value="French">French </option>
	  <option value="Korean">Korean </option>
	    <option value="Spanish">Spanish</option>
		  <option value="Vietnamese">Vietnamese </option>
    
</select>
<br>
<label>Ticket Price: </label>
					<!--<input type="number" name="myear" required placeholder="Enter Brand" value=""><br><br> 
					!-->
					<select id="year" name="myear">
    <option>Price</option>
   
    <option value="250">250</option>
    <option value="270">270</option>
    <option value="300">300</option>
    <option value="350">350</option>
    <option value="400">400</option>
</select>
<br>
	<label>Genre: </label>
					<!--<input type="text" name="mgenre" required placeholder="Enter Brand" value=""><br><br> 
				!-->	
				<select name="mgenre"  >
  <option value="Action">Action</option>
  <option value="Comedy">Comedy</option>
  <option value="Drama">Drama</option>
  <option value="Fantasy">Fantasy</option>
    <option value="Horror">Horror</option>
	  <option value="Mystery">Mystery</option>
	    <option value="Romance">Romance</option>
		  <option value="Thriller">Thriller</option>
		    <option value="Western">Western</option>
</select>				
<br>
				<label>Movie set: </label>
				 <!--	<input type="number" name="mset" required placeholder="Enter Brand" value=""><br><br> 
!-->
				 <select name="mset"  >
  <option value="1">Movie Set 1</option>
  <option value="2">Movie Set 2</option>
  <option value="3">Movie Set 3</option>
  <option value="4">Movie Set 4</option>
    <option value="5">Movie Set 5</option>
</select>
						 
						<br>
				 
								<label>Available Day: </label>
			 
				 <select name="mday"  >
  <option value="Monday">Monday</option>
  <option value="Tuesday">Tuesday</option>
  <option value="Wednesday">Wednesday</option>
  <option value="Thursday">Thursday</option>
    <option value="Friday">Friday</option>
	   <option value="Saturday">Saturday</option>
	      <option value="Sunday">Sunday</option>
            
      
                <br>
				</td>
					</tr>
					<tr>
					<td colspan=2; id="lasttd">
                <div class="butonesC">

                  <input class="butones submit1" type="submit" name="buttonE">
                  <button class="butones close1"  type="button" name="button">Close</button>
                </div>
</td>
				</tr>
				
				</table>

              </form>
          </div>
        </div>



          <div class="header">
           <img src="img2/logo.png" style="height: 65px; width: 420px; margin-left: 45px;">
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
             
  <div class="dropdown-content">
    <a href="EndSess.php">Log Out</a>
	
  </div>
</div>
           </div>
        </div>
      
        <div class="bars">
		 <div class="pnum">

           <p> Total Movies:
		   <?php 
			echo $_SESSION['numres'];
 
		   ?> </p>
		   </div>	
          <div class="barsCOCO">
		 
            <button class="SB add" type="submit" name="addb">Add Movie</button>
         
            <input class="SB search" id="search_text" type="search" name="search" placeholder="Search Movie">
          </div>
        </div>

       
         <div id="result" >
     
        </div>
  
      </div>
	      </div>
   
      <script type="text/javascript">
	  $(document).on('click','.edit',function(e){
		
	 
		var id = e.target.value;
			
		$('#pic').load('config/viewRecord.php?id='+id);
		$.ajax({
			type: 'GET',
			url: 'config/viewRecord.php?id='+id,
			dataType: 'json',
			success: function(data,status,xhr){
				 
		 $("#try").val("ewan ko na to");
 	$("#pid").val( );
			
			//$("#editForm [name='pimage']").val(data["Pimage"]);
	 	$("#editForm [name='pimage']").val(data["poster"]);
			 var sauce =data["poster"];
			//var temp=data["Psale"];
			//alert(temp);
		 
	 	$("#pic").attr("src",sauce);
			 // $("#imageBox").html("<img src=' + this.href + '>");
			//need to	$("#editForm [name='mtitle']").val("tangina");
			$("#editForm [name='mticket']").val(data["availticket"]);
			$("#editForm [name='mtitle']").val(data["title"]);
			 	$("#editForm [name='mid']").val(data["mid"]);
				$("#editForm [name='mgenre']").val(data["genre"]);
				$("#editForm [name='mdirector']").val(data["director"]);
				$("#editForm [name='mlanguage']").val(data["language"]);
				$("#editForm [name='myear']").val(data["year"]);
				$("#editForm [name='mset']").val(data["numset"]);
				$("#editForm [name='mday']").val(data["dayavail"]);
					$("#editForm [name='mproduction']").val(data["production"]);
			
			 
			
			},
			error: function(xhr, status, error){
				$message = "<h1>"+xhr['status']+" "+error+"</h1>";
				$("body").html($message);
			}
		});
			

	});

function preview(){
	$("#pic").hide();
	var preview = document.getElementById("preview");
	var file = document.getElementById("img-upload").files[0];
	var reader = new FileReader();
	var caption = document.getElementById("caption");
	
	reader.onloadend = function(){
		preview.innerHTML = "<img id = 'img-preview' width = '200' height = '200' src = '"+reader.result+"'>";
		var ewan = reader.result;
	}
	
	if(file){
		reader.readAsDataURL(file);
	}
	else{
		preview.innerHTML = "";
	}
}

function preview2(){
	$("#pic").hide();
	var preview = document.getElementById("preview2");
	var file = document.getElementById("img-upload2").files[0];
	var reader = new FileReader();
	var caption = document.getElementById("caption");
	
	reader.onloadend = function(){
		preview.innerHTML = "<img id = 'img-preview2' width = '200' height = '200' src = '"+reader.result+"'>";
		var ewan = reader.result;
	}
	
	if(file){
		reader.readAsDataURL(file);
	}
	else{
		preview.innerHTML = "";
	}
}


      $(document).ready(function(){

            
            $(".modalbox").hide();
            $(".modalbox1").hide();
		 
         
        $(".btnEntrance").on("click",function(){
          
		  $(".container1").fadeOut(1300);
                $(".container2").fadeIn(1300);
        });
        $(".goBack").on("click",function(){
          $(".container1").fadeIn(1000);
                $(".container2").fadeOut(1000);
        });
        $(".close").on("click",function(){
          $(".modalbox").fadeOut(500);
		 
		 window.location.reload();
        });
        $(".barsCOCO > .add").on("click",function(){
          $(".modalbox").fadeIn();
        });
        $(".barsCOCO > .add").on("click",function(){
          $(".modalbox").fadeIn();
        });

        
        $(".submit").on("click",function(){
          $(".modalbox").fadeOut(500);
        });


          $(".submit1").on("click",function(){
          $(".modalbox1").fadeOut(500);

        });

            $(".close1").on("click",function(){
          $(".modalbox1").fadeOut(500);
		  window.location.reload();
        });
		 
		
		 
      });

      function myFunction(){
   
           $(".modalbox1").fadeIn(500);
		   
        
      } 

        
      </script>
    </div>
  </body>
</html>
