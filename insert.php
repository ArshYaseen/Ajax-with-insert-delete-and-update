<?php

$name = $_POST['stdName'];
$age = $_POST['stdAge'];
$email = $_POST['stdEmail'];

//echo "Name is ".$name." Age is ".$age." Email is ".$email;

$conn= new mysqli("localhost","root","","web");
$q="insert into std_info(stdName,stdAge,stdEmail) values('".$name."',".$age.",'".$email."')";

	if($conn->query($q)==TRUE){
		echo "Data Inserted";
	}else{
		echo $conn->error;
	}


	
?>