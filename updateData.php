<?php
$id = $_POST['stdId'];
$name = $_POST['stdName'];
$age = $_POST['stdAge'];
$email = $_POST['stdEmail'];

//echo "Name is ".$name." Age is ".$age." Email is ".$email;

$conn= new mysqli("localhost","root","","web");
$q="update std_info set stdName = '".$name."', stdAge =".$age.", stdEmail = '".$email."' where id=".$id;

	if($conn->query($q)==TRUE){
		header("location:index.php");
	}else{
		echo $conn->error;
	}


	
?>