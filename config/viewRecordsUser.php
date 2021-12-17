<?php
session_start();
	require("connect.php");

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "
	SELECT * FROM movies
	WHERE  
	  title LIKE 
	  '%".
	  $search.
	  "%' 
	OR genre LIKE '%".$search."%' 
	 
	OR production LIKE '%".$search."%
	OR yearLIKE '%".$search."%
	OR numset LIKE '%".$search."%
	OR dayavail LIKE '%".$search."%
	 ORDER BY mid' 
	";
}
else
{
	$query = "SELECT * FROM movies ORDER BY mid  ";
}

$results = mysqli_query($connection, $query);
mysqli_num_rows($results);
	
			  
			$_SESSION['numres']=mysqli_num_rows($results);
				
				
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
	.$row['mid'].'"  hidden></button>';
	echo' <div class="pic">';
	echo'<img src="'.$row['poster'].'">';
	echo '</div>';
	echo '<br>';
	echo' <div class="desc">';
	echo $row['title'];
	echo '<br>';
	echo 'Movie Set'.$row['numset'];
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