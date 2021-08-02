
<!DOCTYPE html>
<html>
<head>
    <title>EMS</title>
    <link rel="stylesheet" href="css\emp.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Roboto+Condensed:ital@0;1&display=swap" rel="stylesheet">

<?php
    session_start();

    if(isset($_SESSION['auth']))
    {
      $role=$_SESSION['role'];
      if ($role=='admin')
      {
            header("location:admin/dashboard.php");
            exit();

    }
    else if ($role=='Employee')
    {

            header("location:employee/dashboard.php");
            exit();
         
    }

      else{ 

          
            header('location:index.php');
      }
}

?>


</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form  class="box" method="post" action="login_insert.php">
                    <h1>Login Here..</h1>
                    <?php if(isset($_SESSION['error']))
                    {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }

                    ?>
                    <p class="text-muted"> Please enter your login and password!</p> 
                    <input type="text" name="email" placeholder="Email"> 
                    <input type="password" name="password" placeholder="Password"> <a class="forgot text-muted" href="#">Forgot password?</a>
                    <input type="submit" id="login" value="Login" href="#"><br>
                  <a href="#"> <i class="fa fa-facebook-official text-white" style="font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="fa fa-instagram text-warning" style="font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="fa fa-linkedin-square  text-white" style="font-size: 35px;"></i></a>&nbsp;&nbsp;&nbsp;
                    <a href="#"><i class="fa fa-github text-white" style="font-size: 35px;"></i></a>
                   
                   
                   
                </form>
            </div>
        </div>
    </div>
</div>



</body>
</html>