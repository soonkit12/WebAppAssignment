<?php
  include("connection.php");
 

  if(isset($_POST['btncreateUser'])){
	$username = $_POST['username'];
	$email = $_POST['userEmail'];
	$password = $_POST['userPass'];
	$status = $_POST['status'];
	$type = $_POST['type']; 
	
	 $sql = "INSERT INTO user (username, user_email, user_password, user_status, user_type)
				VALUES ('$username','$email','$password ','$status','$type')";
	  
	 
	mysql_query($sql);
	echo "<script>window.alert ('User created!');window.location.href = 'manageUser.php';</script>";
	 
	 

	
	mysql_close($con);
  
  }
		
		
?>