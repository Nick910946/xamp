


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
                  
                    <th>Leave_from</th>
                    <th>Leave_to</th>
                    <th>Earning_leaves</th>
                    <th>Medical_leaves</th>
                    <th>Casual_leaves</th>
                    <th>Status</th>
                    <th>Comment</th>



                  </tr>
                  </thead>
                  <?php
                  include ("../dbe.php");
                
                            $id = $_SESSION['id'];
          					$a = "select * from apply_leave inner join employee on apply_leave.apply_by=employee.id where employee.id=$id";
          					$b = mysqli_query($sop,$a);
          					$c = mysqli_fetch_array($b);


                	?>

                  <tr class=" bg-secondary text-center text-white">


                
                  <td><?php echo $c['leave_from']?></td>
                  <td><?php echo $c['leave_to']?></td>
                  <td><?php echo $c['earning_leave']?></td>
                  <td><?php echo $c['medical_leave']?></td>
                  <td><?php echo $c['casual_leave']?></td>
                  <td class="btn btn-primary"><?php echo $c['status']?></td>
                  <td><?php echo $c['comment']?></td>  


                 </tr>
          


                  <tbody>
                  
                  </tbody>
                   <tr class="text-center text-dark bg-warning">
                 
                    <th>Valid_from</th>
                    <th>Valid_to</th>
                    <th>Earning_leaves</th>
                    <th>Medical_leaves</th>
                    <th>Casual_leaves</th>
                    <th>Status</th>
                    <th>Comment</th>

                     

                    
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