
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
                    <th>t_id</th>
                    <th>Task</th>
                    <th>ID</th>
                    <th>Assined_by</th>
                    <th>Action</th>
                  
                  </tr>
                  </thead>
                  <?php
                  include ("../dbe.php");
                  $f = $_SESSION['id'];
                  $a = "select * from assingned_task where id = $f ";
                  $b = mysqli_query($sop,$a);
                  while($c = mysqli_fetch_array($b)){

                  ?>

                  <tr class=" text-dark text-center bg-warning">


                  <td><?php echo $c['t_id']?></td>
                  <td><?php echo $c['task']?></td>
                  <td><?php echo $c['id']?></td>
                  <td><?php echo $c['assigned_by']?></td>
                  <td><a href="reply_task.php?t_id=<?php echo $c['t_id']?>">Reply Task</td></a>


                   

                  


                    
      
          </tr>
          <?php

          }

          ?>



                  <tbody>
                  
                  </tbody>
                   <tr class="text-center bg-primary text-white">
                    <th>t_id</th>
                   	<th>Task</th>
                    <th>ID</th>
                    <th>Assined_by</th>
                    <th>Action</th>
                    
                   
                    
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