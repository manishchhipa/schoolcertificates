<?php  
require_once('blocks/header.php');
$id = $_REQUEST['add'];
$DBFunction = new DBFunction(); 
$userData = $DBFunction->select_row('cc',$id);
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
													<p>Kataria Krishi Farm, P.O. Panchyawala, Sirsi Road, Jaipur 302034(Raj.) <br>Phone : 0141-2470027</p>
													<h5>Character Certificate</h5>
												</div>
											</td>
										</tr>
										<tr>
											<td width="25%" height="53">
												<div class="cert-f">
													<b>Certificate No.</b>
														<i><input type="text" style="width: 40%;" required  name = "certificate_no" value="<?php  echo $userData['certificate_no']; ?>"></i>
												</div>
											</td>
											 
											<td width="55%">
												<div class="cert-f text-right">
													<span><b>Enrolment No.</b>
														<input type="text" readonly  name = "enrolment_number" value="<?php  echo $userData['enrolment_number']; ?>"></span>
														<Br>
														<span><b>Scholar No.</b>
														<input  type="text" readonly name = "scholar_number" value="<?php  echo $userData['scholar_number']; ?>"></span>
												</div>
											</td>
										</tr>

									</table>
									<p>Certified that (Miss/Mrs.)
										<input type="text" readonly style="width: 68%;"  name = "name" value="<?php  echo $userData['name']; ?>"> Daughter of Mr.
										<input type="text"  readonly style="width: 45%;" name = "father_name" value="<?php  echo $userData['father_name']; ?>"> born on
										<input type="text" readonly style="width: 24%;"  name = "dob" value="<?php  echo $userData['dob']; ?>"/> was a student of this college from
										<input type="text" readonly   style="width: 25%;"  name = "s_from" value="<?php  echo $userData['s_from']; ?>">To
										<input type="text" readonly  style="width: 25%;"   name = "s_to" value="<?php  echo $userData['s_to']; ?>">
										<br><br> She leaves the Institution having passed
										<input type="text" readonly style="width: 50%;"  name = "class" value="<?php  echo $userData['class']; ?>"> examination of Year
											<input type="text" readonly  name = "year" value="<?php  echo $userData['year']; ?>"> in
										<input type="text"  style="width: 20%;"   readonly  name = "division" value="<?php  echo $userData['division']; ?>"> division.</p>
									<p class="text-center">To the best of my knoledge her conduct has been good.</p>
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
											<td width="41%" height="53">
												<div class="cert-f text-left">
													<span><b>Date</b>
													<input type="text" readonly  name = "date" value="<?php  echo $userData['date']; ?>"></span>
												</div>
											</td>
											<td width="40%">&nbsp;</td>
											<td width="27%"> </td>
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
            '<body style="padding: 50px; " >' + data +
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
