<?php
	include("../utils/db_connect.php"); 
	$result = mysql_query('SELECT * FROM admin WHERE username = "' . $_POST['username'] . '"');
	$admin_success = FALSE;
	while($row = mysql_fetch_array($result))
	{ 
		$salt = $row['password'];
		$hash = md5($_POST['password']);
		if ($hash == $row['password'])
		{
			$admin_success = TRUE;
			$admin_id = $row['id'];
			$username = $row['username'];
		}
	}
 
	if ($admin_success == TRUE)
	{
		$_SESSION['admin_checked'] = TRUE;
		$_SESSION['admin_id'] = $admin_id;
		$_SESSION['username'] = $username;
		header('Location: ../home.php');
	}
	else
	{
			 
		$_SESSION['admin_checked'] = FALSE;
		$_SESSION['admin_id'] = '';
		$_SESSION['sales_id'] = '';
		$_SESSION['username'] = '';
		header('Location: ../index.php?login=false');
	 
		
		
	}
?>