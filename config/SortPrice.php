<?php

	require("connect.php");
session_start();
 
 
	$asd =  $_POST["query"];
 	$dd =  $_POST["query2"] ;
	$d = $_POST["c"];
	$d2 =" Psale='".$d."'";
	
 

 if($dd=="S1"){
	 if($d=="All"){
	 $query = "  SELECT * FROM products    
WHERE $asd   ORDER BY PID ";
	 }
	 if($d!="All"){
	 $query = "  SELECT * FROM products    
WHERE  $d2 AND $asd   ORDER BY PID   ";
	 }
	 
 }
  
 if($dd!="S1"){
	 if($d=="All"){
	 $query = "  SELECT * FROM products    
WHERE $asd  ORDER BY Pprice $dd";
	 }
	 if($d!="All"){
	 $query = "  SELECT * FROM products    
WHERE  $d2 AND $asd  ORDER BY Pprice $dd";
	 }
	 
 }
 

 	 
   
 
 
 /*
$query = "  SELECT * FROM products    
WHERE  $d2 AND $asd ORDER BY PID  ";
 if($asd==""){
	 
	 if($b=="S1" || $b=="s1"){
	 $query = "  SELECT * FROM products    
 ORDER BY PID";
 }else{
	$query = "  SELECT * FROM products    
  ORDER BY Pprice $b";
 }
	 
 }
 */

$results = mysqli_query($connection, $query);
mysqli_num_rows($results);
	  
		$ops = mysqli_num_rows($results);
	
			
				
			 
				
	 $x=0;
	if($ops>=1){
	while($row = mysqli_fetch_array($results)){
	  $_SESSION['numres'] = $ops;
	$x++;
	
	 
    if($x==1 ||$x%5==1){
	
		echo'<tr>';
		echo'<td id="Tile">';

	}else{
		echo'<td id="Tile">';
	}
	
	echo' <div class="con1">';
echo' <button  id="BtnTile" value="'
	.$row['PID'].'"  hidden></button>';
	echo' <div class="pic">';
	echo'<img src="'.$row['Pimage'].'">';
	echo '</div>';
	echo '<br>';
	echo' <div class="desc">';
	echo $row['Pname'];
	echo '<br>';
	echo '₱'.$row['Pprice'];
echo '</div>';
echo '</div>';

    if($x%5==0){
		echo'</tr>';
		echo'</td >';
		}
else{
		echo'</td > ';
	}

}
	}else{
		echo '<h1> ZERO RESULT </h1>';
		
	}
	

?>