<?php
session_start();

include("dbcon.php");

$email=$_POST['email'];

$password=$_POST['password'];


$data= "select * from users where email='$email' and password='$password'";

$result=mysqli_query($con,$data);


$total= mysqli_num_rows($result);

$a=mysqli_fetch_assoc($result);


if($total==1){
    $_SESSION['IS_LOGIN']= true;
    $_SESSION['email']=$a['email'];
    $_SESSION['name']=$a['name'];

    $id=$a['id'];
    $status=0;

  $data="update users set status='$status' where id=$id";
  mysqli_query($con,$data);
    
    header('location: dashboard.php');
   }
  else
      echo "<script>
              alert('Please insert the correct email and password.');
                    location.href='index.php';
            </script>";
                                 
?>

