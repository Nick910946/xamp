<?php
include "../dbe.php";
$id = $_POST['id'];

$password  = $_POST['password']; 

//echo $first_name,$last_name,$email,$password,$phone,$dob,$gender,$department,$role;


$data = "update employee SET password='$password' where id =$id";

  mysqli_query($sop,$data);
  header('location:emp_display.php');
?>