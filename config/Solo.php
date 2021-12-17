<?php
require("connect.php");


//DAPAT TO YUNG VIEW PRODUCT
$output = '';
 
	$search = $_POST["query"];
	$query = 
	"SELECT * FROM movies
	WHERE  mid ='$search' ";
  
$results = mysqli_query($connection, $query);
mysqli_num_rows($results);
				

	
	while($row = mysqli_fetch_array($results)){
	 

	$out=
	'<div id="SoloBG">'
	.'<table>'
	.'<tr>'
	.'<td>'
	.'<div class="SoloPic">'
	.'<img src="'.$row['poster'].'">'
	.'</div>'
	.'</td>'
	.'<td class="SoloDesc">'
	.'<button id="Close"><i class="fas fa-caret-square-down" style="font-size:40px; color:#2b484e;"></i></button>'
	.'<p id="desc1" style="font-size:35px;"><u> '.$row['title'].'</u> </p>'
	
	.'<p id="desc2" style="font-size:23px;"  > Production: '.$row['production'].'<br>Director: '. $row['director']. 
	'<br>Genre:  ' .$row['genre']. '<br>         Language: '. $row['language']. 
	'<br>Avail Ticket:  ' .$row['availticket'].  
	'<br>  Movie Set: '. $row['numset']. 
	'<br>Day Available: '. $row['dayavail']. 
	' </p >'
	 
	.'<p id="desc3" style="font-size:25px;"> ₱ '.$row['year'].'</p>'
	 
	.'<div id=buttonBuy>'
	.'<button value=> <a href="fillupticket.php"> BUY TICKET. </a> </button>' 
	.'</div>'  
	.'</div>'
	.'</td>';


echo $out;

 
}
 
if(isset($_POST['buy'])){
	
	echo '<script>alert("Gumagana")</script>';
	
require 'sendemail.php';

$ruru->Send();
}
?>