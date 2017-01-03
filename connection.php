<?php
	$servername="localhost";
	$username="root";
	$password="";
	$db = "task";
	
	$con = mysql_connect($servername,$username,$password);
	mysql_select_db($db, $con);
	
	/*
	//create database
	$sql = "CREATE DATABASE task";
	
	if(!mysql_query($con, $sql))
	 die("Connection failed: " .  mysql_error());
		else
	 echo "";
 
	*/
	
	
	 /*
	//create user table
	  
		 $sql = "CREATE TABLE user(
				user_id INT (10) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
				username VARCHAR(30) NOT NULL,
				user_email VARCHAR(30) NOT NULL,
				user_password VARCHAR(15) NOT NULL,
				user_status ENUM('active','inactive') NOT NULL DEFAULT 'active' , 
				user_type ENUM('1','2') NOT NULL DEFAULT '1' )";
			 
			 
			  if (mysql_query($sql)) {
					echo "Table user created successfully.<br>";
			} else {
					echo "Error creating table: " . mysql_error() . "<br>";
			}
	*/
	
	 /*
	//create task table
	  
		 $sql = "CREATE TABLE eventdata ( TaskID INT(10) NOT NULL AUTO_INCREMENT , 
				 Task VARCHAR(55) NOT NULL , 
				DateAdded DATE NOT NULL ,TimeStart TIME(6) NOT NULL , 
				 TimeEnd TIME(6) NOT NULL , 
				 Details VARCHAR(255) NOT NULL , 
				 user_id INT (10),
				 PRIMARY KEY (TaskID)),
				user_id INT (10) FOREIGN KEY REFERENCES user(user_id) )";
			 
			 
			  if (mysql_query($sql)) {
					echo "Table taskcalendar created successfully.<br>";
			} else {
					echo "Error creating table: " . mysql_error() . "<br>";
			}
	 
	*/
	
	
	//start a session for the new user to recognize user who have already logged in
	//and carry that session over to the next page
	session_start();
	if($con){
	echo " ";
	}else{
	 die("Connection failed: " .  mysql_error());
}
?>