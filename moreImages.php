<?php

require'db/connection.php';


$page = (int) @$_GET['page'] ?: 1;
 

$numItems = 15;
$start = ($page - 1) * $numItems;
 
$query = "SELECT * FROM `Products` ORDER BY PID LIMIT {$start}, {$numItems}";


$results = mysqli_query($connection, $query);
mysqli_num_rows($results);
	
			  
			
				
				
	 $x=0;
	
	while($row = mysqli_fetch_array($results)){
	 
	$x++;
	
	 
    if($x==1 ||$x%5==1){
	
		echo'<tr>';
		echo'<td id="Tile">';
	}else{
		echo'<td id="Tile">';
	}
	echo' <button  id="BtnTile" value="'
	.$row['PID'].'" hidden></button>';
	echo' <div class="con1">';
	echo' <div class="pic">';
	echo'<img src="'.$row['Pimage'].'">';
	echo '</div>';
	echo '<br>';
	echo' <div class="desc">';
	echo $row['Pname'];
	echo $start;
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

?>