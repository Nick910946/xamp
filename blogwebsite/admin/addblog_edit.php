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
		<?php

					include "../dbcon.php";
					 $id = $_GET['shri'];
					 $a = "select * from bloglist where id = $id";

					 $b = mysqli_query($con,$a);
					 $c = mysqli_fetch_array($b);
					 // echo "<pre>";

					 // print_r($c);


					?>




		  <form action="update_addblog.php" method="post" enctype="multipart/form-data">
		  	<input type="hidden" name="id" value="<?php echo $c['id'] ?>">
          <div class="form-group">
            <label>Tittle</label>
            <input type="text" name="tittle" class="form-control" value="<?php echo $c['tittle'] ?>">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"><?php echo $c['description'] ?></textarea>
          </div>
          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
             <img src="<?php echo $c['image']?>" style="width: 100px; height: 100px; border-radius: 50px;">
          </div>
          <button type="update" class="btn btn-info">update</button>



        </form>


		<!-------ourcode end--------->

    	</div><!-------container-erapper-------->













<?php

include ("footer.php")


?>