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

		    <!------- our code----------->
		     <table id="example1" class="table table-bordered table-striped">
	

		<thead>
			<tr class="text-center">
		<th>S.no</th>
		<th>Title</th>
		
		<th>Image</th>
		<th>Description</th>
		</thead>
		


	</tr>	

	<?php

		include "../dbcon.php";

		$id = $_GET['jay'];

		$a = "select * from bloglist where id = $id";
		$b = mysqli_query($con,$a);
		$c = mysqli_fetch_array($b);
		

	?>
		<tr class="text-center">
			<td><?php echo $c['id']?></td>
			<td><?php echo $c['tittle']?></td>
			
			<td><img src="<?php echo $c['image']?>" style="width: 100px; height: 100px; border-radius: 70px;"></td>
			<td><?php echo $c['description']?></td>
			




		</tr>		


	</table>

	</div>

		     <!------- our code end----------->
		    
    	</div><!-------container-wrapper-------->





<?php

include ("footer.php")


?>