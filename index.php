<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Intro to php</title>
	<script type="text/javascript">
		function myFunc(id){
			//alert("Function Called");
			var obj = new XMLHttpRequest();
		obj.open("GET","delete.php?id="+id,"true");
		obj.send();
		obj.onreadystatechange = function(){
			if(obj.status==200 && obj.readyState==4){
				//alert(obj.responseText);
				document.getElementById('output').innerHTML=obj.responseText;
			}
		}; 
		}
	</script>
</head>
<body>
		<form action="insert.php" method="POST">
			<input type="text" name="stdName" placeholder="Enter your Name">
			<input type="text" name="stdAge" placeholder="Enter your Age">
			<input type="text" name="stdEmail" placeholder="Enter your Email">

			<input type="submit" value="Insert My Data">
		</form>

		<?php

		$conn= new mysqli("localhost","root","","web");

		echo "<span id='output'>";
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
	echo "</span>";
		?>

</body>
</html>