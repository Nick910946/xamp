


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
          <h1 class="m-0">Add Blog</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blog</li>
            </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div><!-- /.content-header -->

  <!-- our code starts -->
  <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Display Blog</h3>
                <button type="disable" class="btn btn-info" style="float:right;" data-toggle="modal" data-target="#ab">Add Admin</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                 
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>

                  </thead>
                  <?php
                  include ("../dbcon.php");
                  $a = "select * from admin";
                  $b = mysqli_query($con,$a);
                 while( $c = mysqli_fetch_array($b)){

                  ?>

                  <td><?php echo $c['id']?></td>
                  <td><?php echo $c['name']?></td>
                  <td><?php echo $c['email']?></td>
                  <td><img src="<?php echo $c['image']?>" style="width: 110px; height: 120px; border-radius: 50px;"></td>

                  <td>


                      <a href="admin_view.php?view=<?php echo $c['id']?>" class="btn btn-info">View</a>
                      <a href="admin_edit.php?edit=<?php echo $c['id']?>" class="btn btn-warning">Edit/Update</a>
                     
                  </td>

      
                 </tr>
                 </tbody>
          <?php
          }
          ?>
          <tfoot>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Image</th>
            <th>Action</th>
            
          </tr>




                  
                  </tfoot>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
  <!-- modal code -->
  
<!-- Button trigger modal -->
  
<!-- Button trigger modal -->
<div class="modal fade" id="ab">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add admin</h5>
          <button type="button" class="close" data-dismiss="modal">
          <span >&times;</span>
          </button>
        
    </div>
      <div class="modal-body">
        <form action="admin_insert.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control"> 
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control"> 
          </div>

          <div class="form-group">
            <label>Description</label>
            <textarea  name="description" class="form-control"></textarea>
          </div>

         

          <div class="form-group">
            <label>Image</label>
            <input type="file" name="image" class="form-control">
          </div>
         

         


           <button type="submit" class="btn btn-info">Submit</button>
        </form>
      </div><!-- modal body ends -->
    </div>
  </div>
</div>
</div>

 

  <!-- modal code end -->
  <!-- our code ends -->

</div>
<!-- content wrapper ends -->









<?php
include("footer.php");
?>