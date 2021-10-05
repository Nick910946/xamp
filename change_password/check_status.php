<?php
session_start();
include('dbcon.php');
$a=$_SESSION['id'];
$data= "select status from users where id='$a'";

$result=mysqli_query($con,$data);
$a=mysqli_fetch_assoc($result);
echo $b=$a['status'];
?>