<?php 

include ("header.php");
include ("sidebar.php");
?>
<div class="container-fliud">
    
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

           
        <!-- Begin Page Content -->
        <div class="container-fluid">


                    <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                
                </div>
                
                <!-- /.container-fluid -->
                <div class="container-fluid">
                	<div class="container">
                		<div class="row mb-3 ">

                           
                			     <div class="col-md-4 shadow-lg bg-secondary">
                    				<h2 class="mt-3 text-white ">Employees</h2></i>
                    				<hr class="sidebar-divider">

                                     <form method="post" action="task_insert.php">
                                        
                    				<?php
                    				include "../dbe.php";
                    				$q = "select * from employee where role In('employee')";
                    				$p = mysqli_query($sop,$q);
                    				while($f = mysqli_fetch_array($p))
                    				{ 
                    				?>
                    				<div class="row mb-4">
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

                            			<div class="col-md-7 shadow-lg " style="margin-top: 20px; "><br>
                                            <h3 class="text-dark text-center">All Assign Leave Form</h3><br>
                                          
                            				<div class="form-group">
                                                <label>Valid form:</label>
                                                <input type="date" name="valid_form" class="form-control ">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <div class="form-group">
                                                <label>Valid to:</label>
                                                <input type="date" name="valid_to" class="form-control ">
                                            </div>

                                            <div class="form-group">
                                                <label>Earning Leaves:</label>
                                                <input type="text" name="earning_leave" class="form-control" placeholder="numbers of Leaves">
                                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                            <div class="form-group">
                                                <label>Medical Leaves:</label>
                                                <input type="text" name="medical_leave" class="form-control " placeholder="numbers of Leaves">
                                            </div>

                                            <div class="form-group">
                                                <label>Casual Leaves:</label>
                                                <input type="text" name="casual_leave" class="form-control " placeholder="numbers of Leaves">
                                            </div>
                                            <!-- admin taking  start -->
                                            <input type="hidden" name="apply_by" value="<?php echo $c['id']?>">
                                           
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
include "footer.php";
?>