<?php
	require("connect.php");
session_start();
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connection, $_POST["query"]);
	$query = "
	SELECT * FROM movies
	WHERE title LIKE '%".$search."%'
	OR genre LIKE '%".$search."%' 
	OR language LIKE '%".$search."%' 
	OR year LIKE '%".$search."%' 
	OR director LIKE '%".$search."%' 
	OR production LIKE '%".$search."%' 
	OR numset LIKE '%".$search."%' 
	OR mid LIKE '%".$search."%' 
	OR dayavail LIKE '%".$search."%' 
	";
}
else
{
	$query = "SELECT * FROM movies ";
}

$results = mysqli_query($connection, $query);


 $_SESSION['numres']=mysqli_num_rows($results);
if(mysqli_num_rows($results) > 0)
{
	$output .= ' <div class="maintable">
				<table>
              <tr class="trhead">
			   <td> movieID </td>
                <td> Title</td>
				
				<td> Genre</td>
				<td> Director</td>
				<td> Poster </td>
				<td> Language </td>
			
		 
				<td> Ticket Prize </td>
			<td> production</td>
			<td> Available ticket</td>
			<td> Day </td>
			<td> Movie Set</td>
			
				<td> ACTIONS </td>
              </tr>';
	while($row = mysqli_fetch_array($results))
	{
		$output .= "<tr class='trcont' style='padding:1.2rem;' >"
			."<td>".$row['mid']."</td>"
			."<td>".$row['title']."</td>"
			."<td>".$row['genre']."</td>"
			."<td>".$row['director']."</td>"
			."<td class='tdimg' >".'<img src="'.$row['poster'].'" height="100"; width="100";>'. "</td>"
			."<td>".$row['language']."</td>"
			 
		
			."<td>".$row['year']."</td>"
				."<td>".$row['production']."</td>"
				."<td>".$row['availticket']."</td>"
				."<td>".$row['dayavail']."</td>"
				."<td>".$row['numset']."</td>"
			

			."<td class='tdaction'>"
			."<button class='Bt edit' name='edit' value='".$row['mid']."' 
			onclick='myFunction()' >UPDATE</button>"
			."<button class='Bt delete' value='".$row['mid']."'>DELETE</button>"
			."</td>"
			."</tr>";
	}
	echo $output."</table> </div>";
}
else
{
	
}
 

?>