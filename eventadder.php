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
			
			
<form name = 'eventadder' method ='POST' action ="insert.php">

	<header>
	 <h2>Task Form</h2>
	</header>
	
	   <table width = '100%'>
	   
	    <tr>
		 <td width= '200px'>TaskID</td>
		 <td width= '300px'><input type='number_format' name='id'></td>
		</tr>
	   
	    <tr>
		 <td width= '200px'>Task</td>
		 <td width= '300px'><input type='text' name='task'></td>
		</tr>
		
		<tr>
		 <td width= '200px'>Date Added (select date you choose from the calendar)</td>
		 <td width= '300px'><input type='date' name='dateadded'></td>
		</tr>
		
		<tr>
		<td width ='200px'>TimeStart</td>
		<td width ='300px'><input type ='time' name='timestart'>(hh:mm:ss)</td>
		</tr>
		
		<tr>
		<td width ='200px'>TimeEnd</td>
		<td width ='300px'><input type ='time' name='timeend'>(hh:mm:ss)</td>
		</tr>
		
		
		<tr>
		 <td width= '200px'>Details</td>
		 <td width='700px'><textarea name='details'></textarea></td>
		</tr>
		
		
		<tr>
		 <td><input type = 'submit' value='Submit' /></td> 
		 <td><input type = 'reset'  value='Clear'/></td>
		 <td><input type = 'return'  value='Back' onclick=history.back();return true;"/></td>
		</tr>
		
		
		
		</table>
		
	
		
			
</form>

	

			 
		</section>
	</div><!--container end-->
	<div style="clear;both"></div>
	<footer>
		Copyright &copy; 2016, Daily Task Planner
	</footer>
</body>
<!--<h1>Welcome  <?php echo $login_session; ?></h1>-->
</html>
