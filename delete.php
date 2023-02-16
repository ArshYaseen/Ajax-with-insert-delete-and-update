<?php

$id=$_GET['id'];

$conn= new mysqli("localhost","root","","web");
$q="delete from std_info where id=".$id;

	if($conn->query($q)==TRUE){
		$q1="select * from std_info";
	$result=$conn->query($q1);


	echo "<table border=1>";
	while($row=$result->fetch_assoc()){
		echo"<tr>";
		echo "<td>".$row["id"]."</td>";
		echo "<td>".$row["stdName"]."</td>";
		echo "<td>".$row["stdAge"]."</td>";
		echo "<td>".$row["stdEmail"]."</td>";
		echo "<td><a href='#' onclick='myFunc(".$row["id"].");'>Delete</a></td>";
		echo "<td><a href='update.php?id=".$row["id"]."'>Update</a></td>";
		echo"</tr>";
	}

	echo "</table>";
	}else{
		echo $conn->error;
	}


	
?>