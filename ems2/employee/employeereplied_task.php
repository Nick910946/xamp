
<?php
include("header.php");
include("sidebar.php");
?>

<div class="container-fluid">
  <div class="container">
      <div style="overflow-x: auto;">
            <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center bg-primary text-white">
                    <th>Reply_id</th>
                    <th>Task</th>
                    <th>Reply</th>
                    <th>Admin Reply</th>
                    <th>Task_id</th>
                    <th>Reply_by(Employee)</th>
                    <th>Date Time</th>
                  
                  </tr>
                  </thead>
                  <?php
                  include ("../dbe.php");
                  $f = $_SESSION['id'];
                  $a = "select * from reply_task inner join employee on reply_task.reply_by=employee.id order by r_id desc";
                  $b = mysqli_query($sop,$a);
                  while($c = mysqli_fetch_array($b)){

                  ?>

                  <tr class=" text-dark text-center bg-warning">


                  <td><?php echo $c['r_id']?></td>
                  <td><?php echo $c['task']?></td>
                  <td><?php echo $c['reply']?></td>
                  <td><?php echo $c['adminmessage']?></td>
                  <td><?php echo $c['t_id']?></td>
                  <td><?php echo $c['first_name']?>&nbsp;<?php echo $c['last_name']?></td>
                  <td><?php echo $c['datetime']?></td>


                   

                  


                    
      
          </tr>
          <?php

          }

          ?>



                  <tbody>
                  
                  </tbody>
                   <tr class="text-center bg-primary text-white">
                    <th>Reply_id</th>
                    <th>Task</th>
                    <th>Reply</th>
                     <th>Admin Reply</th>
                    <th>Task_id</th>
                    <th>Reply_by(Employee)</th>
                    <th>Date Time</th>
                    
                   
                    
                  </tr>
                  </tfoot>

                     
                  </thead>
                 
                  <tfoot>
                 
                </table><br><br><br><br>

    </div>            

	</div>          

</div>






<?php
include("footer.php");
?>  
