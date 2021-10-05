<?php 

include ("header1.php");
include ("sidebar1.php");
?>
<div class="container-fliud">
    
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

           
        <!-- Begin Page Content -->
        <div class="container-fluid">


                    <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Task</h1>
                </div>
                
                <!-- /.container-fluid -->
                <div class="container-fluid">
                	<div class="container">
                		<div class="row mb-3 ">

                           
                			     <div class="col-md-4 shadow-lg bg-secondary">
                    				<i class="fa fa-street-view"><h2 class="mt-3 text-white ">Employees</h2></i>
                    				<hr class="sidebar-divider">

                                     <form method="post" action="task_insert.php">
                                        
                    				<?php
                    				include "../dbe.php";
                    				$q = "select * from employee where role In('employee')";
                    				$p = mysqli_query($sop,$q);
                    				while($f = mysqli_fetch_array($p))
                    				{ 
                    				?>
                    				<div class="row mb-3">
                    					<div class="col-md-1">
                    						<input type="checkbox" name="id[]" value="<?php echo $f['id'] ?>">
                    					</div>
                    					<div class="col-md-11">
                    				        <h5 class="text-capitalize text-white"><?php echo $f['first_name'] ?>&nbsp;<?php echo $f['last_name'] ?>
                    			            </h5>
                			        </div>
                    			    </div>
                    				<?php
                    				} 
                    				?>
                            			</div>
                            			<div class="col-md-1">
                            			</div>
                            			<div class="col-md-7 shadow-lg bg-light"><br><br>
                                            <h4>Task description</h4><br>
                            				<textarea class="form-control" rows="5" cols="6"  placeholder="Type the Task here..." name="task"></textarea>

                                            <!-- admin taking  start -->
                                            <br>
                                            <input type="text" name="assigned_by" value="<?php echo $_SESSION['name'] ?>">
                                            <!-- admin taking  start -->
                            				<div class="d-grid gap-2">
                            				<button class="btn shadow m-3" type="submit" style="background: #030618; color: white;">Submit</button>

                            				</div>
                            			
                    </div>
                			
                </form>

                </div>
                            
            </div>
                          
        </div>
           

    </div>
            <!-- End of Main Content -->

</div>


<?php 
include "footer1.php";
?>