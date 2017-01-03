
   
   
 <?php
   
   
   $con = mysql_connect('localhost','root','');
   
   if(!$con){
	   echo 'NOT CONNECTED' ;
   }
   
   if(!mysql_select_db('task')){
	   echo 'not selected';
   }
   
   
   $TaskID = $_POST['id'];
   $Task = $_POST['task'];
   $DateAdded = $_POST['dateadded'];
   $TimeStart =$_POST['timestart'];
   $TimeEnd =$_POST['timeend'];
   $Details =$_POST['details'];
   $userid = $_session['login_user']; //not sure
   //insert part after the details
   $sql = "INSERT INTO eventdata (TaskID,Task,DateAdded,TimeStart,TimeEnd,Details,user_id) VALUES ('$TaskID','$Task','$DateAdded','$TimeStart','$TimeEnd','$Details','$userid')";
   
   if(!mysql_query($sql))
   {
	   echo 'Not inserted';
   }
   else{
	   echo 'sucessfully inserted,Redirecting to calendar page....';
   }
   
   header("refresh:1; url=calendar.php");
   
   
   ?>