<?php
$user_name=filter_input(INPUT_POST,user_name);
$Your_password=filter_input(INPUT_POST,Your_password);
echo $user_name;
echo $Your_password;
if(!empty ($user_name))
{
if(!empty ($Your_password)
{
	$host="localhost";
	$dbusername="root";
	$dbpassword="epsilon";
	$dbname="mydatabase";
	
$conn= new mysqli($host,$dbusername,$dbpassword,$dbname);
if(mysqli_connect_error())
{
	die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	
}	
else
{
	$sql="INSERT INTO login(user_name,Your_password) values('$user_name','$Your_password')";
	if($conn->query($sql))
	{
		echo "one record successfully inserted";
	}
	else{
		echo "Error:".$sql."<br>".$conn-.error;
	}
	$conn->close();
}else{
	echo "username should not be empty";
	die();
}

}
else{
	echo "password should not be empty";
	die();
}


?>