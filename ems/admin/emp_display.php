
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
                    <th>E_id</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Department</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php
                  include ("../dbe.php");
                  $a = "select * from employee order by id desc";
                  $b = mysqli_query($sop,$a);
                  while($c = mysqli_fetch_array($b)){

                  ?>

                  <tr class=" text-white text-center bg-secondary ">


                  <td><?php echo $c['id']?></td>
                  <td><?php echo $c['first_name']?></td>
                  <td><?php echo $c['last_name']?></td>
                  <td><?php echo $c['department']?></td>


                   

                  


                    <td class="text-center "> 
                      
                      <a href="emp_view.php?jay=<?php echo $c['id']?>"><i class="fa fa-eye text-primary" style="font-size: 25px;"></i></a>&nbsp;&nbsp;&nbsp;

                      <a href="emp_edit.php?shri=<?php echo $c['id']?>" class="fa fa-pencil text-warning" style="font-size: 25px;"></a>&nbsp;&nbsp;&nbsp;

                      <a href="emp_delete.php?del=<?php echo $c['id']?>"><i class="fa fa-trash-o  text-danger" style="font-size: 25px;"></i></a>
                      




          </td>

      
          </tr>
          <?php

          }

          ?>



                  <tbody>
                  
                  </tbody>
                   <tr class="text-center text-warning bg-primary">
                    <th>E_id</th>
                    <th>First_name</th>
                    
                    <th>Last_name</th>
                    <th>Department</th>
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