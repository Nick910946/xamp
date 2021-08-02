






<?php

include("header.php");
include("sidebar.php");


?>


 <!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
		    <!-- Content Header (Page header) -->
		    <div class="content-header">
		      <div class="container-fluid">
		        <div class="row mb-2">
		          <div class="col-sm-6">
		            <h1 class="m-0">Dashboard</h1>
		          </div><!-- /.col -->
		          <div class="col-sm-6">
		            <ol class="breadcrumb float-sm-right">
		              <li class="breadcrumb-item"><a href="#">Home</a></li>
		              <li class="breadcrumb-item active">Dashboard v1</li>
		            </ol>
		          </div><!-- /.col -->
		        </div><!-- /.row -->
		      </div><!-- /.container-fluid -->
		    </div><!-- /.content-header -->
		
		<!-------ourcode start--------->
		 <table id="example1" class="table table-bordered table-striped">
	

		<thead>
			
					<th>Id.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Date_Time</th>
                  
		</thead>
		


	</tr>	

	<?php

		include "../dbcon.php";

		$id = $_GET['view'];

		$a = "select * from admin where id = $id";
		$b = mysqli_query($con,$a);
		$c = mysqli_fetch_array($b);
		

	?>
	<tbody>
               <tr>
	
			<td><?php echo $c['id']?></td>
			<td><?php echo $c['name']?></td>
			<td><?php echo $c['email']?></td>
			<td><?php echo $c['password']?></td>
			<td><?php echo $c['description']?></td>
			<td><img src="<?php echo $c['image']?>" style="width: 150px; height: 150px; border-radius: 70px;"></td>
			<td><?php echo $c['datetime']; ?></td>
			
			




		</tr>	

		</tbody>
                   
                  <tfoot>
                  <tr>
                    <th>Id.No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Date_Time</th>
                
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body ---------->	
               </div>
            <!-- /.card -->

     
    </div>

    <!-- own code ends --> 
    
</div>
<!--  /.Content Wrapper. Contains page content -->

	

	
<?php

include ("footer.php")


?>