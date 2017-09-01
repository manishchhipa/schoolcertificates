<?php  
require_once('blocks/header.php');

$DBFunction = new DBFunction(); 
$EmployeeList = $DBFunction->select_rows('tc');
 
?>
 
   <div id="wrapper">
         <?php require_once('blocks/sidebar.php'); ?>
		 <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Transfer Certificate <small>List</small>
                        </h1>
                    </div>
                </div>
                

                 <div class="row">
				 	<?php if(isset($_REQUEST['employee_delete'])){ ?> 
							<div class="alert alert-danger">
								<strong>Well done!</strong> You successfully Delete.
							</div>
								<?php } ?>
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                         
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Enrolment Number</th>
											<th>Name</th>
                                            <th>Class</th>
                                            <th>Date</th>
                                            <th>Action</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
											 <?php if(!empty($EmployeeList)){
												while ($row = mysql_fetch_array($EmployeeList)){
													 
													?>
												 <tr>
													<td><?php  echo $row['enrolment_number'] ; ?></td>
													<td><?php  echo $row['prefix'].' '.$row['name']; ?></td> 
													<td><?php  echo $row['class']; ?></td> 
													<td><?php  echo $row['date']; ?></td>  
													<td>
													<a href="<?php echo $admin_url ?>tcprint.php?id=<?php echo $row['id']; ?>"  >View / Print</a> 
													</td>
													
														</tr>
												<?php } } ?>
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>


                <!-- /. ROW  -->
				
            </div>
			<footer><p>All right reserved.</footer>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
  
<?php require_once('blocks/foot.php'); ?>
<script>
$(document).ready(function(){ 
	$('.commancls').removeClass('active');
	$('.employeemanagement').addClass('active');
	
	$('.commanLicls').removeClass('active-menu');
	$('.emplist').addClass('active-menu');
	
	
	});
</script>
