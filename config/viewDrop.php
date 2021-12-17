<?php
	require("connect.php");

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "
	SELECT  * FROM movies
	WHERE  
	  title LIKE '%".$search."%' 
	OR production LIKE '%".$search."%' 
	 
	OR genre LIKE '%".$search."%'  
	LIMIT 3 ";
}
else
{
	$query = "SELECT * FROM movies LIMIT 3 ";
}

$results = mysqli_query($connection, $query);
mysqli_num_rows($results);

	
	while($row = mysqli_fetch_array($results)){

	$out = 
	 
	'<button id="SuggestBtn" value="'.$row['title'].'">'
	.'<img id="DropIMG" src="'.$row['poster'].'">'
	.$row['title'].'<br>'.'Movie Set'.$row['numset']
	 
.'</button>'	;
	echo $out;
	}
?>