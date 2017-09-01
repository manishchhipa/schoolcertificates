<?php  
require_once('blocks/header.php');
$DBFunction = new DBFunction(); 
$roleList = $DBFunction->select_rows('user_role');
?>
   <div id="wrapper">
         <?php require_once('blocks/sidebar.php'); ?>
		 <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Character Certificate <small>Add</small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->

                <div class="row">
                <div class="col-lg-12">
						 <div class="panel panel-default">
							<div class="panel-heading">
							 
							</div>
							 <div class="panel-body">
								<div class="row">
									<?php if(isset($_REQUEST['add'])){ ?> 
										<div class="alert alert-success">
											<strong>Well done!</strong> You successfully Added.
										</div>
								<?php } ?>
									   <div class="col-lg-6">
										 <form action="control/admin_employee.php" id="tcAdd" role="form" method="post">
											<input  class="form-control" name = "enrolment_number" value=""/> 	 
											<input  class="form-control" name = "scholar_number" value=""/> 	 
											<input  class="form-control" name = "prefix" value=""/> 	 
											<input  class="form-control" name = "name" value=""/> 	 
											<input  class="form-control" name = "father_name" value=""/> 	 
											<input  class="form-control" name = "dob" value=""/> 	 
											<input  class="form-control" name = "s_from" value=""/> 	 
											<input  class="form-control" name = "s_to" value=""/> 	 
											<input  class="form-control" name = "class" value=""/> 	 
											<input  class="form-control" name = "year" value=""/> 	 
											<input  class="form-control" name = "division" value=""/> 	 
											<input  class="form-control" name = "date" value=""/> 	 
										  
											 <input type="hidden" name="action" value="insertCc" class="form-control">
											 <button type="submit" class="btn btn-info">Save And Print</button>
                                        
										</form>												
									   </div>
								</div>
							</div>	
						 </div>
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
