<?php
include('dbcon.php');


$id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$change_password=$_POST['change_password'];
$logout=$_POST['logout'];

//$update_sql='';
if(isset($logout)){
	//$update_sql=",status='0'";
	echo $data="update users set name='$name', email='$email',password='$change_password', status=1 where id=$id";
//die();
	mysqli_query($con,$data);
	header("location: dashboard.php");
}
else{
$data="update users set name='$name', email='$email',password='$change_password' where id=$id";

	mysqli_query($con,$data);
	header("location: dashboard.php");
	//?edit='$id'
}
?>