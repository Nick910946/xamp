
<?php
include("header.php");
include("sidebar.php");
?>

<div class="container-fluid">
  <div class="container">
    <div style="overflow-x:auto; ">
     
 
              
              <!-- /.card-header -->
              
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center  text-warning bg-primary">
                    <th>Reply_id</th>
                    <th>Task</th>
                    <th>Reply(Employee)</th>
                    <th>Admin Reply</th>
                    <th>Date time</th>
                    <th>Reply Message</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php
                  include ("../dbe.php");
                  $a = "select * from reply_task order by r_id desc";
                  $b = mysqli_query($sop,$a);
                  while($c = mysqli_fetch_array($b)){

                  ?>

                  <tr class=" text-white text-center bg-secondary ">


                  <td><?php echo $c['r_id']?></td>
                  <td><?php echo $c['task']?></td>
                  <td><?php echo $c['reply']?></td>
                  <td><?php echo $c['adminmessage']?></td>
                  <td><?php echo $c['datetime']?></td>
                  <td>
                <form method="post" action="reply_msg.php">
                 
                    <textarea name="adminmessage" class="form-control"><?php $c['adminmessage']?></textarea>
                  </td>

                      <input type="hidden" name="r_id" value="<?php echo $c['r_id']?>">
                  

                  <td class="text-center "> 
                      
                    <button class="btn btn-warning" type="submit">Reply Message</button>
                  
                </form>
              `   </td>
      
      </tr>
          <?php

          }

          ?>



                  <tbody>
                  
                  </tbody>
                   <tr class="text-center text-warning bg-primary">
                    <th>Reply_id</th>
                    <th>Task</th>
                    <th>Reply(Employee)</th>
                    <th>Task_id</th>
                    <th>Employee Name</th>
                    <th>Admin Message</th>
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