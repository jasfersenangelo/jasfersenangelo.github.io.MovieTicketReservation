<?php
require("connect.php");


//DAPAT TO YUNG VIEW PRODUCT
$output = '';
 
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = 
	"SELECT * FROM movies
	WHERE  title ='$search'";
  
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
	.'<p id="desc1"><u>  '.$row['title'].'</u> </p>'
	
	.'<p id="desc2"  > Production:'.$row['production'].'     &nbsp;&nbsp;&nbsp;&nbsp;  Director:'. $row['director']. 
	'<br>Genre:  ' .$row['genre']. '       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Language:'. $row['language']. 
	'<br>Avail Ticket:  ' .$row['availticket']. '       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Language:'. $row['language']. 
	'<br>  Movie Set:'. $row['numset']. 
	'Day Availavble: '. $row['dayavail']. 
	' </p >'
	 
	.'<p id="desc3"> ₱ '.$row['year'].'</p>'
.'<div id=buttonBuy>'
	.'<button value=> <a href="fillupticket.php"> BUY TICKET. </a> </button>' 
	.'</div>'
	.'</td>';


echo $out;

}

?>