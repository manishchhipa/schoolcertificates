 <?php  $currentPage =  basename($_SERVER['PHP_SELF']);
$activeclass= "active-menu "; 
 ?>
 <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">	
				<img class="logo_front" src="assets/img/logo_front.png"  style="width: 210px;">
				</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                 <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <!--li><a href="admin_profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li> 
                        <li class="divider"></li-->
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul> 
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="<?php if($currentPage == 'home.php'){ echo $activeclass; } ?>" href="home.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
				 
					 <li>
                        <a href="#"><img style="width: 15px; margin-right: 4px;" src="assets/img/order.png"> Transfer Certificate<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="<?php if($currentPage == 'tcList.php'){ echo $activeclass; } ?>">
                                <a href="tcList.php">List</a>
                            </li>
							<li class="<?php if($currentPage == 'tcAdd.php'){ echo $activeclass; } ?>">
                                <a href="tcAdd.php">Add New</a>
                            </li>
                           
                        </ul>
                    </li> 
					 <li>
                        <a href="#"><img style="width: 15px; margin-right: 4px;" src="assets/img/order.png"> Character Certificate<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="<?php if($currentPage == 'ccList.php'){ echo $activeclass; } ?>">
                                <a href="ccList.php">List</a>
                            </li>
							<li class="<?php if($currentPage == 'ccAdd.php'){ echo $activeclass; } ?>">
                                <a href="ccAdd.php">Add New</a>
                            </li>
                           
                        </ul>
                    </li> 
					
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      