<?php  
require_once('blocks/header.php');
$id = $_REQUEST['id'];
$DBFunction = new DBFunction(); 
$userData = $DBFunction->select_row('tc',$id);
 
?>
   <div id="wrapper">
         <?php require_once('blocks/sidebar.php'); ?>
		 <div id="page-wrapper">
            <div id="page-inner">

                <div class="row">
                <div class="col-lg-12">
						 <div class="panel panel-default">
							  <form action="control/admin_employee.php" id="tcAdd" role="form" method="post">
							 <input style="margin:20px;" type="button" onclick="PrintElem('#printDiv');" class="btn btn-info" value="Print" />
							  
							 <div class="panel-body"  id="printDiv">
								<div class="form-sec">
								    <link href="assets/css/stylesnewprint.css" rel="stylesheet" />
									<table border="0" width="100%">
										<tr>
											<td colspan="3" class="text-center">
												<div class="og-sec"><img src="assets/img/un..named.png" alt="">
													<h1>Alankar Mahila P.G. Mahavidyalaya</h1>
													<p>Kataria Krishi Farm, P.O. Panchyawala, Sirsi Road, Jaipur 302034(Raj.)<br> Phone : 0141-2470027</p>
													<h5>Transfer Certificate</h5>
												</div>
											</td>
										</tr>
										<tr>
											<td width="45%" height="53">
												<div class="cert-f">
													<b>Certificate No.</b>
													<i><input type="text" style="width: 40%;" required  name = "certificate_no" value="<?php  echo $userData['certificate_no']; ?>"></i>
												</div>
											</td>
											 
											<td width="55%">
												<div class="cert-f text-right">
													<span><b>Enrolment No.</b>
												 <input type="text" readonly name = "enrolment_number" value="<?php  echo $userData['enrolment_number']; ?>"></span>
														<Br>
														<span><b>Scholar No.</b>
														<input type="text" readonly name = "scholar_number" value="<?php  echo $userData['scholar_number']; ?>"></span>
												</div>
											</td>
										</tr>

									</table>
									<p>Certified that (Miss/Mrs.)
										<input type="text" readonly  name = "name" value="<?php  echo $userData['name']; ?>" style="width: 68%;"> Daughter of Mr.
										<input type="text" readonly name = "father_name" value="<?php  echo $userData['father_name']; ?>" style="width: 53%;"> was a student in the 
										<input type="text" readonly style="width: 25%;"  name = "class" value="<?php  echo $userData['class']; ?>"> Class of this college in the Session 
										<input type="text" readonly style="width: 25%;"  name = "session" value="<?php  echo $userData['session']; ?>"> 
										 
										<br><br> She leaves (reason)
										<input type="text" readonly style="width: 74%;"  name = "reason" value="<?php  echo $userData['reason']; ?>"> having passed the 
										 <input type="text" readonly  style="width: 26%;"  name = "pass" value="<?php  echo $userData['pass']; ?>"> Examination of
										 <input type="text" readonly  style="width: 30%;"   name = "examination_of_pass" value="<?php  echo $userData['examination_of_pass']; ?>">  having failed in the 
										 <input type="text"  readonly style="width: 25%;"  name = "fail" value="<?php  echo $userData['fail']; ?>"> Examination of
										 <input type="text" readonly  style="width: 30%;"  name = "examination_of_fail" value="<?php  echo $userData['examination_of_fail']; ?>">  in
										<input type="text" readonly  name = "division" value="<?php  echo $userData['division']; ?>"> Division.</p>
									<p> Her Conduct as far as known to the Principal was  
									<input type="text" readonly style="width: 38%;"  name = "conduct" value="<?php  echo $userData['conduct']; ?>"> 
									 
									<Br>
										She has paid all charges due from her to the Collage up to date. 
									</p>
										
									
									<br>
									 
									<table border="0" width="100%">

										<tr>
											<td width="33%" height="53">
												<div class="cert-f bol text-uppercase">
													<b>Jaipur</b>
												</div>
											</td>
											<td width="33%">&nbsp;</td>
											<td width="33%">
												<div class="cert-f bol">
													<b>Principal</b>
												</div>
											</td>
										</tr>
										<tr>
											<td width="43%" height="53">
												<div class="cert-f text-left">
													<span><b>Date</b>
													<input type="text" readonly  name = "date" value="<?php  echo $userData['date']; ?>"></span>
												</div>
											</td>
											<td width="33%">&nbsp;</td>
											<td width="33%"> </td>
										</tr>

									</table>
								</div>
							 
							</div>	 
							
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
  <script>
   function PrintElem(elem)
{
   
	 CreateWindow($(elem).html());
}
 function CreateWindow(data) {
        var mywindow = window.open('about:blank', '_blank');
        var myWindowContents = '<html>' +
            '<head>' + 
            '<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">' +
            '</head>' +
            '<body >' + data +
            '<script src="http://code.jquery.com/jquery-2.1.0.min.js type="text/javascript">' + '<' + '/script>' +
            '<script type="text/javascript">' +
            '$(document).ready(function () {' +
            '});' +
            '<' + '/script>' +
            '</body>' +
            '</html>';
        mywindow.document.write(myWindowContents);
        mywindow.document.close();
        mywindow.focus();
		 
      if (!isChrome) {
            mywindow.print();
        } 
    }
  </script>
<?php require_once('blocks/foot.php'); ?>
