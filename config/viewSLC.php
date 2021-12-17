<?php

	require("connect.php");
session_start();
$output = '';
 
	$x =  mysqli_real_escape_string($connection, $_POST["a"]); //Min
	$y = mysqli_real_escape_string($connection, $_POST["b"]);	//Max
	$z = mysqli_real_escape_string($connection, $_POST["c"]);	//ORDER
	$checked =   $_POST["checked"];	//ORDER

if($checked!=""){
	if($z=="S1" || $z=="s1"){
		$query = "  SELECT * FROM products 
WHERE   $checked AND (Pprice >= $x AND Pprice <= $y) ORDER BY PID ";
	}else{
	 
	
	$query = "  SELECT * FROM products 
WHERE   $checked AND (Pprice >= $x AND Pprice <= $y) ORDER BY Pprice $z ";
	}
}

if($checked==""){
	if($z=="S1" || $z=="s1"){
		$query = "  SELECT * FROM products 
WHERE    (Pprice >= $x AND Pprice <= $y) ORDER BY PID ";
	}else{
	 
	
	$query = "  SELECT * FROM products 
WHERE  (Pprice >= $x AND Pprice <= $y) ORDER BY Pprice $z ";
	}
}



$results = mysqli_query($connection, $query);
mysqli_num_rows($results);
$_SESSION['numres']=null;
	$ops=mysqli_num_rows($results);
	
			
				 $_SESSION['numres'] = $ops;
 $ops = mysqli_num_rows($results); 
 
		if($ops!=0){
		 
	
				
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
		echo '<h1> THERE IS NO AVAILABLE PRODUCT </h1>';
	}

?>