<?php
	include("../utils/db_connect.php");
	include("../libraries/dbfunction.php");
	// Get Data From Post
	if(isset($_POST['action'])) { 
		switch ($_POST['action']){
			
		case 'insertTc':
 		
				$data = array(
				'certificate_no' => $_POST['certificate_no'],
				'enrolment_number' => $_POST['enrolment_number'],
				'scholar_number' => $_POST['scholar_number'],
				'prefix' => $_POST['prefix'],
				'name' => $_POST['name'], 
				'father_name' => $_POST['father_name'], 
				'class' => $_POST['class'], 
				'session' => $_POST['session'], 
				'reason' => $_POST['reason'], 
				'pass' => $_POST['pass'], 
				'examination_of_pass' => $_POST['examination_of_pass'], 
				'fail' => $_POST['fail'], 
				'examination_of_fail' => $_POST['examination_of_fail'], 
				'division' => $_POST['division'], 
				'conduct' => $_POST['conduct'], 
				'date' => $_POST['date'], 
				'crated_by' => $_SESSION['admin_id'],
				'crated_at' => date( 'Y-m-d H:i:s')   
				); 
			 
		 $query = "INSERT INTO tc (certificate_no,enrolment_number,scholar_number,prefix,name,father_name,class,session,reason,pass,examination_of_pass,fail,examination_of_fail,division,conduct,date,crated_by,crated_at) ";
		 $query .= "VALUES (
		 '".$data['certificate_no']."',
		 '".$data['enrolment_number']."',
		 '".$data['scholar_number']."', 
		 '".$data['prefix']."',
		 '".$data['name']."',
		 '".$data['father_name']."',
		 '".$data['class']."',
		 '".$data['session']."',
		 '".$data['reason']."',
		 '".$data['pass']."',
		 '".$data['examination_of_pass']."',
		 '".$data['fail']."',
		 '".$data['examination_of_fail']."',
		 '".$data['division']."', 
		 '".$data['conduct']."',  
		 '".$data['date']."',  
		 '".$data['crated_by']."', 
		 '".$data['crated_at']."')"; 	
 
		 $res = mysql_query($query);
		 $lastId =  mysql_insert_id(); 
		if($lastId){ 
			header('Location: ../tcprint.php?id='.$lastId);
		}else{ 
			header('Location: ../tcAdd.php?add=0');
		}
		 
		break; 
			case 'insertCc':
 		
				$data = array(
				'certificate_no' => $_POST['certificate_no'],
				'enrolment_number' => $_POST['enrolment_number'],
				'scholar_number' => $_POST['scholar_number'],
				'prefix' => $_POST['prefix'],
				'name' => $_POST['name'], 
				'father_name' => $_POST['father_name'], 
				'dob' => $_POST['dob'], 
				's_from' => $_POST['s_from'], 
				's_to' => $_POST['s_to'], 
				'class' => $_POST['class'], 
				'year' => $_POST['year'], 
				'division' => $_POST['division'],  
				'date' => $_POST['date'], 
				'crated_by' => $_SESSION['admin_id'],
				'crated_at' => date( 'Y-m-d H:i:s')   
				); 
			 
		 $query = "INSERT INTO cc (certificate_no,enrolment_number,scholar_number,prefix,name,father_name,dob,s_from,s_to,class,year,division,date,crated_by,crated_at) ";
		 $query .= "VALUES (
		 '".$data['certificate_no']."',
		 '".$data['enrolment_number']."',
		 '".$data['scholar_number']."', 
		 '".$data['prefix']."',
		 '".$data['name']."',
		 '".$data['father_name']."',
		 '".$data['dob']."',
		 '".$data['s_from']."',
		 '".$data['s_to']."',
		 '".$data['class']."',
		 '".$data['year']."',
		 '".$data['division']."',
		 '".$data['date']."', 
		 '".$data['crated_by']."', 
		 '".$data['crated_at']."')"; 	
 
		 $res = mysql_query($query);
		 $lastId =  mysql_insert_id(); 
		if($lastId){ 
			header('Location: ../ccprint.php?add='.$lastId);
		}else{ 
			header('Location: ../ccAdd.php?add=0');
		}
		 
		break; 
		}
		
	
	
	}
	// Get Data From Request
	if(isset($_REQUEST['action'])) { 
		switch ($_REQUEST['action']){  
		case 'deleteEmployee':	
			$id = $_REQUEST['delete_id'];
			$query = "UPDATE `employee` SET is_shown = 1 WHERE id= $id"; 	 
			 if(mysql_query($query)){
				header('Location: ../admin_employee_list.php?employee_delete=1');
			}else{ 
				header('Location: ../admin_employee_list.php?employee_delete=0');
			}
		break;
		}
		
	
	
	}
?>