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
                
                </div>
                
                <!-- /.container-fluid -->
                <div class="container-fluid">
                	<div class="container">
                		<div class="row mb-3 ">

                           
                			     <div class="col-md-4 shadow-lg bg-secondary">
                    				<h2 class="mt-3 text-white ">Employees</h2></i>
                    				<hr class="sidebar-divider">

                                     <form method="post" action="leave_insert.php">
                                        
                    				<?php
                    				include "../dbe.php";
                    				$q = "select * from employee where role = 'employee'";
                    				$p = mysqli_query($sop,$q);
                    				while($f = mysqli_fetch_array($p))
                    				{ 
                    				?>
                    				<div class="row mb-4">
                    					<div class="col-md-1">
                    						<input type="checkbox" name="assigned_to[]" value="<?php echo $f['id'] ?>">
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
                                                <input type="date" name="valid_from" class="form-control ">
                                            </div>

                                            <div class="form-group">
                                                <label>Valid to:</label>
                                                <input type="date" name="valid_to" class="form-control ">
                                            </div>

                                            <div class="form-group">
                                                <label>Earning Leaves:</label>
                                                <input type="text" name="earning_leave" class="form-control" placeholder="numbers of Leaves">
                                            </div>

                                            <div class="form-group">
                                                <label>Medical Leaves:</label>
                                                <input type="text" name="medical_leave" class="form-control " placeholder="numbers of Leaves">
                                            </div>

                                            <div class="form-group">
                                                <label>Casual Leaves:</label>
                                                <input type="text" name="casual_leave" class="form-control " placeholder="numbers of Leaves">
                                            </div>
                                          
                                            <!-- admin taking  start -->

                                            <input type="text" name="assigned_by" value="<?php echo $_SESSION['id']?>">
                                           
                                            <!-- admin taking  start -->
                            				<div class="d-grid gap-2">
                            				<button class="btn shadow m-3" type="submit" style="background: #030618; color: white;">Submit</button>

                            				</div>
                            			
                    </div>
                			
                </form>

                </div>
                            
            </div>

             <div style="overflow-x: auto;">
    
  

                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr class="text-center text-dark bg-warning">
                  
                     <th>Valid_from</th>
                    <th>Valid_to</th>
                    <th>Employee Name</th>
                    <th>Earning_leaves</th>
                    <th>Medical_leaves</th>
                    <th>Casual_leaves</th>
                    



                  </tr>
                  </thead>
                  <?php
                  
                           include "../dbe.php"; 
                            $a = "select * from assign_leave inner join employee on assign_leave.assigned_to=employee.id order by l_id desc";
                            $b = mysqli_query($sop,$a);
                           while( $c = mysqli_fetch_array($b))
                           {
                            

                    ?>

                  <tr class=" bg-secondary text-center text-white">


                
                  <td><?php echo $c['valid_from']?></td>
                  <td><?php echo $c['valid_to']?></td>
                  <td><?php echo $c['first_name']?></td>

                  <td><?php echo $c['earning_leaves']?></td>
                  <td><?php echo $c['medical_leaves']?></td>
                  <td><?php echo $c['casual_leaves']?></td>
                  

                 </tr>
          
                 <?php

                    }
                 
                 ?>

                  <tbody>
                  
                  </tbody>
                   <tr class="text-center text-dark bg-warning">
                 
                    <th>Valid_from</th>
                    <th>Valid_to</th>
                    <th>Employee Name</th>
                    <th>Earning_leaves</th>
                    <th>Medical_leaves</th>
                    <th>Casual_leaves</th>
                    
                     

                    
                  </tr>
                  </tfoot>

                     
                  </thead>
                 
                  <tfoot>
                 
                </table>
                          
        </div>
           

    </div>
            <!-- End of Main Content -->

</div>


<?php 
include "footer1.php";
?>