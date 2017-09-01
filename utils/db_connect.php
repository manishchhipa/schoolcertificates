<?php include_once("configuration.php");
 
	$con1 = mysql_connect("localhost", "root", "");
	
	if (!$con1)
	{
		die('Could not connect: ' . mysql_error());
	}	
	$db1 = mysql_select_db('schoolNew', $con1);
	 