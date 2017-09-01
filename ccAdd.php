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
                <div class="col-lg-12">
						 <div class="panel panel-default">
							   <form action="control/admin_employee.php" id="tcAdd" role="form" method="post">
							 <div class="panel-body">
							 
								<div class="form-sec">
									<table border="0" width="100%">
										<tr>
											<td colspan="3" class="text-center">
												<div class="og-sec"><img src="assets/img/un..named.png" alt="">
													<b>Alankar Mahila P.G. Mahavidyalaya</b>
													<p>Kataria Krishi Farm, P.O. Panchyawala, Sirsi Road, Jaipur 302034(Raj.) Phone : 0141-2470027</p>
													<h5>Character Certificate</h5>
												</div>
											</td>
										</tr>
										<tr>
											<td width="29%" height="53">
												<div class="cert-f">
													<b>Certificate No.</b>
													<i><input type="text" style="width: 45%;" required  name = "certificate_no" value=""></i>
												</div>
											</td>
											<td width="33%">&nbsp;</td>
											<td width="40%">
												<div class="cert-f text-right">
													<span><b>Enrolment No.</b>
														<input type="text" required  name = "enrolment_number" value=""></span>
														<Br>
														<span><b>Scholar No.</b>
														<input required type="text" name = "scholar_number" value=""></span>
												</div>
											</td>
										</tr>

									</table>
									<p>Certified that (Miss/Mrs.)
										<input type="text" style="width: 78%;"  name = "name" value=""> Daughter of Mr.
										<input type="text" style="width: 54%;" name = "father_name" value=""> born on
										<input type="text" style="width: 23%;"  name = "dob" value=""/> was a student of this college from
										<input type="text"  name = "s_from" value="">To
										<input type="text"  name = "s_to" value="">
										<br><br> She leaves the Institution having passed
										<input type="text" style="width: 60%;"  name = "class" value=""> examination of Year
											<input type="text"  name = "year" value=""> in
										<input type="text"  name = "division" value=""> division.</p>
									<p class="text-center">To the best of my knoledge her conduct has been good.</p>
									<br>
									<br>
									<br>
									<table border="0" width="100%">

										<tr>
											<td width="33%" height="53">
												<div class="cert-f bol text-uppercase">
													<b>Jaipur</b>
												</div>
											</td>
											<td width="40%">&nbsp;</td>
											<td width="27%">
												<div class="cert-f bol">
													<b>Principal</b>
												</div>
											</td>
										</tr>
										<tr>
											<td width="37%" height="53">
												<div class="cert-f text-left">
													<span><b>Date</b>
													<input type="text"  name = "date" value=""></span>
												</div>
											</td>
											<td width="40%">&nbsp;</td>
											<td width="27%"> </td>
										</tr>

									</table>
								</div>
							 
							</div>
								<input type="hidden" name="action" value="insertCc" class="form-control"> 
								<button type="submit"  style="margin-left: 30px;" class="btn btn-info">Next</button> 
						</form>								
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
