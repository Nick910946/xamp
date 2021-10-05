
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

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EMS</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  
</head>
<style type="text/css">


body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: linear-gradient(to right, #D500F9, #FFD54F);
    background-repeat: no-repeat
}

input,
textarea {
    background-color: #F3E5F5;
    border-radius: 50px !important;
    padding: 12px 15px 12px 15px !important;
    width: 100%;
    box-sizing: border-box;
    border: none !important;
    border: 1px solid #F3E5F5 !important;
    font-size: 16px !important;
    color: #000 !important;
    font-weight: 400
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #D500F9 !important;
    outline-width: 0;
    font-weight: 400
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.card {
    border-radius: 0;
    border: none
}

.card1 {
    width: 50%;
    padding: 40px 30px 10px 30px
}

.card2 {
    width: 50%;
    background-image: linear-gradient(to right, #FFD54F, #D500F9)
}

#logo {
    width: 70px;
    height: 60px
}

.heading {
    margin-bottom: 60px !important
}

::placeholder {
    color: #000 !important;
    opacity: 1
}

:-ms-input-placeholder {
    color: #000 !important
}

::-ms-input-placeholder {
    color: #000 !important
}

.form-control-label {
    font-size: 12px;
    margin-left: 15px
}

.msg-info {
    padding-left: 15px;
    margin-bottom: 30px
}

.btn-color {
    border-radius: 50px;
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9);
    padding: 15px;
    cursor: pointer;
    border: none !important;
    margin-top: 40px
}

.btn-color:hover {
    color: #fff;
    background-image: linear-gradient(to right, #D500F9, #FFD54F)
}

.btn-white {
    border-radius: 50px;
    color: #D500F9;
    background-color: #fff;
    padding: 8px 40px;
    cursor: pointer;
    border: 2px solid #D500F9 !important
}

.btn-white:hover {
    color: #fff;
    background-image: linear-gradient(to right, #FFD54F, #D500F9)
}

a {
    color: #000
}

a:hover {
    color: #000
}

.bottom {
    width: 100%;
    margin-top: 50px !important
}

.sm-text {
    font-size: 15px
}

@media screen and (max-width: 992px) {
    .card1 {
        width: 100%;
        padding: 40px 30px 10px 30px
    }

    .card2 {
        width: 100%
    }

    .right {
        margin-top: 100px !important;
        margin-bottom: 100px !important
    }
}

@media screen and (max-width: 768px) {
    .container {
        padding: 10px !important
    }

    .card2 {
        padding: 50px
    }

    .right {
        margin-top: 50px !important;
        margin-bottom: 50px !important
    }
}

</style>
<body>

    <div class="container px-4 py-5 mx-auto">
    <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
            <div class="card card1">
                <div class="row justify-content-center my-auto">
                    <div class="col-md-8 col-10 my-5">
                        <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRaCladA5S2uf0AWjvOCxUHJWJK816XyeFTCg&usqp=CAU" style="width: 120px;"> 

                             <?php
                                if (isset($_SESSION['error'])) {
                                     echo $_SESSION['error'];
                                     unset($_SESSION['error']);
                                 } 
                             ?>

                        </div>
                        <h3 class="mb-5 text-center heading">Employee Managment System</h3>
                        <h6 class="msg-info">Please login to your account</h6>
                        <form method="post" action="login_insert.php">
                        <div class="form-group">
                             <label class="form-control-label text-muted">Username</label> 
                             <input type="text" name="email" placeholder="Enter Your email " class="form-control"> 
                        </div>
                        <div class="form-group"> 
                            <label class="form-control-label text-muted">Password</label>
                             <input type="password"  name="password" placeholder="Enter Your Password" class="form-control"> 
                        </div>
                        <div class="row justify-content-center my-3 px-3"> 
                            <button type="submit" class="btn-block btn-color">Login </button>
                        </div>

                        <div class="row justify-content-center my-2"> 
                            <a href="#"><small class="text-dark">Forgot Password?</small></a> 
                        </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="card card2">
                <div class="my-auto mx-md-5 px-md-5 right">
                    <h3 class="text-white">We are more than just a company</h3> <small class="text-white">An employee management system is a platform where all work-related as well as important personal details of an employee is stored and managed in a secure way. By using this system, you can manage admin activities in an easier and quicker way.</small>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>