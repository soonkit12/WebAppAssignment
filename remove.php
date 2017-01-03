

<?php

	mysql_connect('localhost','root','');
   
	mysql_select_db('task');
	
	$sql = "DELETE FROM eventdata WHERE TaskID='$_GET[id]'";

	if(mysql_query($sql))
	header("refresh:1; url=view.php");


?>