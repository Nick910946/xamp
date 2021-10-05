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
                    <th>A_id</th>
                    <th>Leave_from</th>
                    <th>Leave_to</th>
                    <th>Earning_leaves</th>
                    <th>Medical_leaves</th>
                    <th>Casual_leaves</th>
                    <th>Apply_by</th>
                    <th>Status</th>
                    <th>Comments</th>
                    <th>Action</th>


                  </tr>
                  </thead>
                  <?php
                  include ("../dbe.php");
                
                    $id = $_SESSION['id'];      
          					$a = "select * from apply_leave inner join employee on apply_leave.apply_by=employee.id order by a_id desc";
          					$b = mysqli_query($sop,$a);
          					while($c = mysqli_fetch_array($b)){


                	?>

                  <tr class=" bg-secondary text-center text-white">


                  <td><?php echo $c['a_id']?></td>
                  <td><?php echo $c['leave_from']?></td>
                  <td><?php echo $c['leave_to']?></td>
                  <td><?php echo $c['earning_leave']?></td>
                  <td><?php echo $c['medical_leave']?></td>
                  <td><?php echo $c['casual_leave']?></td>
                  <td><?php echo $c['first_name']?></td>
                  <td ><?php echo $c['status']?></td>
                  <td>

                    <form action="update_leave.php" method="post">

                      <textarea name="comment" class="form-control"></textarea>
                       <input type="text" name="a_id" value="<?php echo $c['a_id']?>">
                       
                  </td>
                   
                   
                  <td>

                 
                    <button type="submit" class="btn btn-primary" name="approved">Approved</button>

                     <button type="submit" class="btn btn-danger" name="rejected">Rejected</button>

                  </td>
                  </form>

                 

                 </tr>
          

                   <?php

                   }

                     ?>


                  <tbody>
                  
                  </tbody>
                   <tr class="text-center text-dark bg-warning">
                      
                    <th>A_id</th>
                    <th>Leave_from</th>
                    <th>Leave_to</th>
                    <th>Earning_leaves</th>
                    <th>Medical_leaves</th>
                    <th>Casual_leaves</th>
                    <th>Apply_by</th>
                    <th>Status</th>
                    <th>Comments</th>
                    <th>Action</th>

                    
                  </tr>

                </tfoot>

                 
                  </thead>

                  <tfoot>

                </table>


                   
               
    
    </div>

  </div>          

</div>


<?php
include("footer.php");
?>  