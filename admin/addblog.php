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
                <button type="" class="btn btn-info" style="float:right;" data-toggle="modal" data-target="#aa">Add Blog</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S. No.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>S. No.</th>
                    <th>Title</th>
                    <th>Description</th>
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
<div class="modal fade" id="aa">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Blog</h5>
          <button type="button" class="close" data-dismiss="modal">
          <span >&times;</span>
          </button>
        
    </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="form-group">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
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