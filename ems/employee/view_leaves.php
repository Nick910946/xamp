


<?php
include("header.php");
include("sidebar.php");
?>
<div class="container-fluid">
  <div class="container">
    <div style="overflow-x: auto;">
    
  

                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr class="text-center text-dark bg-warning">
                  
                     <th>Valid_from</th>
                    <th>Valid_to</th>
                    <th>Earning_leaves</th>
                    <th>Medical_leaves</th>
                    <th>Casual_leaves</th>
                    



                  </tr>
                  </thead>
                  <?php
                  include ("../dbe.php");
                
                            $id = $_SESSION['id'];
          					$a = "select * from assign_leave inner join employee on assign_leave.assigned_to=employee.id where employee.id='$id'";
          				    $b = mysqli_query($sop,$a);
          					$c = mysqli_fetch_array($b);
                            

                	?>

                  <tr class=" bg-secondary text-center text-white">


                
                  <td><?php echo $c['valid_from']?></td>
                  <td><?php echo $c['valid_to']?></td>
                  <td><?php echo $c['earning_leaves']?></td>
                  <td><?php echo $c['medical_leaves']?></td>
                  <td><?php echo $c['casual_leaves']?></td>
                  

                 </tr>
          


                  <tbody>
                  
                  </tbody>
                   <tr class="text-center text-dark bg-warning">
                 
                    <th>Valid_from</th>
                    <th>Valid_to</th>
                    <th>Earning_leaves</th>
                    <th>Medical_leaves</th>
                    <th>Casual_leaves</th>
                    
                     

                    
                  </tr>
                  </tfoot>

                     
                  </thead>
                 
                  <tfoot>
                 
                </table>

                <form method="post" action="empleave_insert.php">

                <div class="col-md-7 shadow-lg " style="margin-top: 20px; "><br>
                                            <h3 class="text-dark text-center">Apply Leave Form</h3><br>
                                          
                                    <div class="form-group">
                                                <label>Leave form:</label>
                                                <input type="date" name="leave_from" class="form-control ">
                                            </div>

                                            <div class="form-group">
                                                <label>Leave to:</label>
                                                <input type="date" name="leave_to" class="form-control ">
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

                                            <input type="hidden" name="apply_by[]" value="<?php echo $_SESSION['id'] ?>">
                                           
                                            <!-- admin taking  start -->
                                    <div class="d-grid gap-2">
                                    <button class="btn shadow m-3" type="submit" style="background: #030618; color: white;">Submit Leave</button>

                                    </div>
                                  
                    </div>
            </form>       
    
    </div>

  </div>          

</div>


<?php
include("footer.php");
?>  