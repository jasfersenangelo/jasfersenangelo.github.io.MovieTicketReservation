<?php

	require("connect.php");

 session_start();
	$search =  $_POST["query"];
	$d =  $_POST["custom"];
	
	if($search=="S1"){
		if($d!="All"){
		$query = "  SELECT * FROM movies WHERE genre='$d'
ORDER BY PID";
		}
		if($d=="All"){
			$query = "  SELECT * FROM movies ORDER BY mid";
		}
	}
	
	if($search!="S1"){
		if($d!="All"){
		$query = "  SELECT * FROM movies WHERE genre='$d'
ORDER BY Pprice $search";
		}
		if($d=="All"){
			$query = "  SELECT * FROM movies ORDER BY mid $search";
		}
	}
 
	 

$results = mysqli_query($connection, $query);
mysqli_num_rows($results);
	
			  $_SESSION['numres']=null;
			 
		$ops=mysqli_num_rows($results);
	
			
				 $_SESSION['numres'] = $ops;
	 $x=0;
	
	while($row = mysqli_fetch_array($results)){
	 
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
	echo'<img src="'.$row['poster'].'">';
	echo '</div>';
	echo '<br>';
	echo' <div class="desc">';
	echo $row['title'];
	echo '<br>';
	echo 'movie set'.$row['numset'];
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
	

?>