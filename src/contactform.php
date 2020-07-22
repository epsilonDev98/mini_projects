<?php
	
	$fullname = $_POST["userName"];
	$emailid = $_POST["userEmail"];
	$mobilenumber = $_POST["userPhone"];
	$subject = $_POST["userMsg"];
	
	
	if(!empty($fullname)||!empty($emailid)||!empty($mobilenumber)||!empty($subject))
	{
		$host="localhost";
		$dbUsername="root"
		$dbPassword="epsilon";
		$dbname="mydatabase";
		$conn=new mysqli($host, $dbUsernam, $dbPassword, $dbname);
		
		if(mysqli_connect_error())
		{
			die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
			
		}
		else
		{
			$SELECT="SELECT email From register Where email=?Limit 1";
			$INSERT="INSERT Into register(userName,userEmail,userPhone,userMsg)values(?,?,?,?)";
			$stmt=$conn->prepare($SELECT);
			$stmt->bind_param("s",$emailid);
			$stmt->execute();
			$stmt->bind_result($emailid);
			$stmt->store_result();
			$rnum=$stmt->num_rows;
			if($rnum==0)
			{
				$stmt->close();
				$stmt=$conn->prepare($INSERT);
				$stmt->bind_param("ssis",$fullname,$emailid,$mobilenumber,$subject);
				$stmt->execute();
				echo"ONE record inserted successfully";
			}
			else{
							echo"someone registered using this email";
			}
			$stmt->close();
			$conn->close();
		}
	}
	

?>