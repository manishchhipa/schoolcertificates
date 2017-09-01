<?php  include('blocks/header_login.php'); ?>   
  <div id="wrapper">
        
        <div style="min-height: 600px;    margin: 0 0 0 0;" id="page-wrapper" >
            <div  style="min-height: 600px;" id="page-inner">
			 test
			 
			 test
				    <div class="row">
					<div class="col-lg-4">
					</div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
								<img class="logo_front" src="assets/img/logo_front.png">
                        </div>
                        <div class="panel-body">
                            <div class="row">
							
								<?php 
									if (isset($_GET['login']))
									{
										if ($_GET['login'] == 'false')
										{
											echo '<div class="alert alert-danger">Sorry, either the username or password was incorrect. Please try again.<br /></div>';
										}
									}
								?> 
							 
									 
                                <div class="col-lg-12">
                                    <form action="control/admin_password_check.php" role="form" method="post">
                                         
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input 
											type="text"  
											class="form-control" 
											placeholder="Username"
											name="username" 
											id="username"
											>
                                        </div>
										 <div class="form-group">
                                            <label>Password</label>
                                            <input
											class="form-control" 
											placeholder="Password"
											name="password" 
											id="password"
											type="password"
											>
                                        </div>
                                           <button type="submit" name="sign_in" class="btn   btn-info">Login</button>
                                        
                                    </form>
                                </div>
                               
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-4 -->
					<div class="col-lg-4">
					</div>
			
			</div>
			
                 <!-- /. ROW  -->
				 <footer  class="text-center"><p>All right reserved.</p></footer>
				</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
   <?php include('blocks/footer.php'); ?>