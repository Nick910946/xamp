<?php
include("header1.php");
include("sidebar1.php");
?>

<div class="container-fluid">
  <div class="container">
    <div style="overflow-x: auto; ">

<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center bg-warning">
                    <th>t_id</th>
                    <th>Task</th>
                    <th>Assigned_to</th>
                    <th>Assigned_by</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php
                  include ("../dbe.php");
                  $a = "select * from assingned_task inner join employee on assingned_task.id=employee.id order by t_id desc";
                  $b = mysqli_query($sop,$a);
                  while($c = mysqli_fetch_array($b)){

                  ?>

                  <tr class=" text-white text-center bg-dark">


                  <td><?php echo $c['t_id']?></td>
                  <td><?php echo $c['task']?></td>
                  <td><?php echo $c['first_name']?>&nbsp;<?php echo $c['last_name']?></td>
                  <td><?php echo $c['assigned_by']?></td>


                   

                  


                    <td class="text-center "> 
                      

                      <a href="task_edit.php?edit=<?php echo $c['id']?>"><i class="fas fa-edit text-primary"></i></a>&nbsp;&nbsp;

                      <a href="task_del.php?del=<?php echo $c['id']?>"><i class="fas fa-trash text-danger"></i></a>
                      




          </td>

      
          </tr>
          <?php

          }

          ?>



                  <tbody>
                  
                  </tbody>
                   <tr class="text-center bg-warning">
                    <th>t_id</th>
                   	<th>Task</th>
                    <th>Assigned_to</th>
                    <th>Assined_by</th>
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
include("footer1.php");
?>  