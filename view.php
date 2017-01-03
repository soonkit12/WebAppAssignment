<?php
  include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<link rel="stylesheet" href="css/dashboard.css" type="text/css">
	<title>User Home</title>
</head>
 <body>
      
	<div id="container">
	  
		<nav id="menu">
			<ul>
				<li class="menuitem"><a href="index.php">Daily Task Planner</a></li>
				<li class="menuitem"><a href="about.php">About Us</a></li>
				<li class="menuitem"><a href="contact.php">Contact Us</a></li>
				<li>
					<ul>
						<li class ="signup"><a href = "logout.php"><button class = "button buttongreen">Sign out</button></a>
						</li>
					</ul>		
				</li>
				
			</ul>
	    </nav>
		  
		 <aside>
			<nav id="leftmenu">
				<a href = "dashboard.php"><h3>Dashboard</h3></a>
				<ul>
					<li><a href="calendar.php">Manage Task</a></li>
					
				</ul>
			</nav>
		</aside>  
		
		<section>
			
		<table id = "view" border='1' cellspacing='0' cellpadding='0' align=center>
		<tr align= 'center'>
			<th>TaskID</th>
			<th>Task</th>
			<th>DateAdded</th>
			<th>Time Start</th>
			<th>Time End</th>
			<th>Details</th>
			<th>Delete</th>
			
		</tr>
<?php
   
   $con = mysql_connect('localhost','root','');
   
	mysql_select_db('task');
	
	$sql = "SELECT * FROM eventdata";

	$info = mysql_query($sql);
	
	$userid = $_session['login_user']; //not sure whether this will work
   
	while($row= mysql_fetch_array($info))
	{
	   echo "<tr>";
	   echo "<td>".$row[<?php $userid ?>]."</td>"; //not sure whether this will work
	   echo "<td>".$row['TaskID']."</td>";
	   echo "<td>".$row['Task']."</td>";
	   echo "<td>".$row['DateAdded']."</td>";
	   echo "<td>".$row['TimeStart']."</td>";
	   echo "<td>".$row['TimeEnd']."</td>";
	   echo "<td>".$row['Details']."</td>";
	   echo "<td><a href=remove.php?id=".$row['TaskID'].">Delete</a></td>";
	   echo "</tr>";
	}
	
	
   ?>
   <tr>
   <td><input type='button' value='Return' name='back' onclick="window.location.href='calendar.php'"></td>
   </tr>
   
   </table>
			 
		</section>
	</div><!--container end-->
	<div style="clear;both"></div>
	<footer>
		Copyright &copy; 2016, Daily Task Planner
	</footer>
</body>
<!--<h1>Welcome  <?php echo $login_session; ?></h1>-->
</html>
