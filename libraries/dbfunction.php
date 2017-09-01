<?php 
class DBFunction{ 
	function select_rows($dbtable){
		$sel = "SELECT * FROM $dbtable ";
		$res = mysql_query($sel);
		return $res;
		
	}
	 function select_row ($dbtable, $id){
		$sel = "SELECT * FROM $dbtable WHERE id =".$id;
		$res = mysql_query($sel);
		if($res){ 
		return  mysql_fetch_array($res); 
		}else{
		return false;	
		}
		
		
	} 
	  function select_data ($dbtable,$rowname, $id){
		$sel = "SELECT * FROM $dbtable WHERE ".$rowname." =".$id;
		$res = mysql_query($sel);
		if($res){ 
		return  mysql_fetch_array($res); 
		}else{
		return false;	
		}
	} 
 
}

?>