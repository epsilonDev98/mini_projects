<?php
	$type = $_POST['type'];
	$fname = $_POST['name'];
	$phone = $_POST['name'];
	$email = $_POST['name'];
	$password = $_POST['name'];
	$cpassword = $_POST['password'];
	$con = mysqli_connect('localhost','root','','trial');
	$query ="INSERT INTO `homepage`(`email`, `passwoREGISTER rd`) VALUES ('$email','$password')";
	$run = mysqli_query($con,$query);
	if($run==TRUE){
	echo "one data inserted successfully";
	}
	else{
	echo "error !";
	}
?>