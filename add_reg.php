<?php

include "config.php";

if($_POST)
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$b_name=$_POST['b_name'];
	$number=$_POST['number'];
	$address=$_POST['address'];
	
	$sql="INSERT INTO `regisss`(`name`, `email`, `b_name`, `number`, `address`) VALUES ('".$name."','".$email."','".$b_name."','".$number."','".$address."')";

	$query = mysqli_query($conn,$sql);
	if($query)
	{
		session_start();
		$_SESSION['name'] = $name;
		header('Location: index.html');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>