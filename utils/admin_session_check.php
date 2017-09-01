<?php   
 if ($_SESSION['admin_checked'] == TRUE && isset($_SESSION['admin_id']) && $_SESSION['admin_id'] != '') {    }
	else
	{ 	
		header("Location: http://localhost/schoolcertificates/index.php?login=false");	 
	} 
	
?>