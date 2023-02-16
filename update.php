<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Intro to php</title>
</head>
<body>

		<?php
		$conn= new mysqli("localhost","root","","web");
		$q1="select * from std_info where id=".$_GET['id'];
	$result=$conn->query($q1);

	echo "<table border=1>";
	echo '<form action="updateData.php" method="POST">';
	while($row=$result->fetch_assoc()){

		echo"<tr>";
		echo '<input type="text" name="stdName" value="'.$row["stdName"].'">';
		echo '<input type="text" name="stdAge" value="'.$row["stdAge"].'">';
		echo '<input type="text" name="stdEmail" value="'.$row["stdEmail"].'">';
		echo '<input type="hidden" name="stdId" value="'.$row["id"].'">';

		echo '<input type="submit" value="Update">';
		echo"</tr>";
	}

	echo "</table>";
	echo "</form>";		?>

		
			
			
		

</body>
</html>