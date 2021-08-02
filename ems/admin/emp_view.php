


<?php
include("header.php");
include("sidebar.php");
?>
<div class="container-fluid">
  <div class="container">
    <div style="overflow-x: auto;">
    
  

                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr class="text-center text-white bg-warning">
                    <th>E_id</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Department</th>
                    <th>Role</th>

                  </tr>
                  </thead>
                  <?php
                  include ("../dbe.php");
                	$id = $_GET['jay'];

          					$a = "select * from employee where id = $id";
          					$b = mysqli_query($sop,$a);
          					$c = mysqli_fetch_array($b);

                	?>

                  <tr class=" bg-secondary text-center text-info">


                  <td><?php echo $c['id']?></td>
                  <td><?php echo $c['first_name']?></td>
                  <td><?php echo $c['last_name']?></td>
                  <td><?php echo $c['email']?></td>
                  <td><?php echo $c['password']?></td>
                  <td><?php echo $c['phone']?></td>
                  <td><?php echo $c['age']?></td>
                  <td><?php echo $c['gender']?></td>
                  <td><?php echo $c['department']?></td>
                  <td><?php echo $c ['role']?></td>


                 </tr>
          


                  <tbody>
                  
                  </tbody>
                   <tr class="text-center text-white bg-warning">
                    <th>E_id</th>
                    <th>First_name</th>
                    <th>Last_name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Age</th>
                     <th>Gender</th>
                    <th>Department</th>
                    <th>Role</th>

                    
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