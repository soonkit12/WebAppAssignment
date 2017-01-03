<?php
include("connection.php");


	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

    $sql = "SELECT * FROM user where user_email = '$email'";
	$result = mysql_query($sql) or die(mysql_error()); 
	$row = mysql_fetch_assoc($result);
	$user_email = $row['user_email'];
	$count = mysql_num_rows($result);
	
	if($count > 0){
		echo "<script>alert('User already exist');window.location.href = 'regUser.php';</script>";
	} else {	
			
		$sql = "insert into user (username, user_email, user_password)
		values ('$username', '$email', '$password')" ;
		mysql_query($sql);
		echo "<script>alert('New record created succcessfully');window.location.href = 'index.php';</script>";
	}
	
	 
	
	mysql_close($con);
?>
	