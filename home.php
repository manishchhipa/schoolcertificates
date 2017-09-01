<?php  
require_once('blocks/header.php');

?>
<style>
.taskPanel .list-group {
    height: 280px;
    overflow-y: scroll;
} 
</style>
   <div id="wrapper">
         <?php require_once('blocks/sidebar.php'); ?>
		 <div id="page-wrapper">
            <div id="page-inner">

			
			
			test

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Dashboard <small> </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
   
                <div class="row home">
                   
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                               <a href="tcAdd.php">   <img src="assets/img/profile8.png"></a> 
                            </div>
                            <div class="panel-footer back-footer-blue">
                               <a href="tcAdd.php">  Transfer Certificate</a>

                            </div>
                        </div>
                    </div>
                      <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                               <a href="ccAdd.php">   <img src="assets/img/profile8.png"></a>
                                
                            </div>
                            <div class="panel-footer back-footer-blue">
                               <a href="ccAdd.php">  Character Certificate</a>

                            </div>
                        </div>
                    </div>
                     
                </div>
				 
				
            </div>
			<footer><p>All right reserved.</footer>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
  
<?php  
 require_once('blocks/foot.php'); ?>

 