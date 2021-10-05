<?php
  include("session.php");
?>

<?php
include('dbcon.php');
$id=$_SESSION['id'];
$sql="select * from users where id=$id";
$result=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Change Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Change Password</p>

      <form action="c_password_insert.php" method="post">
        <input type="hidden" class="form-control" name="id" value="<?php echo $data['id'];?>">
        <input type="hidden" class="form-control" name="name" value="<?php echo $data['name'];?>">
        <input type="hidden" class="form-control" name="email" value="<?php echo $data['email'];?>">
        <div class="input-group mb-3">

          <input type="password" name="change_password" class="form-control" placeholder="Change Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> 
        <div class="row">
          <div class="col-8">
            <div>
              <input type="checkbox" name="logout">
              <label>
                Logout from all
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
