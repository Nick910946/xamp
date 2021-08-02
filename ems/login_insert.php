<?php 
 
session_start();

include('dbe.php');
$email=$_POST['email'];
$password=$_POST['password'];


$sql="select * from employee where email='$email' and password='$password'";
$res=mysqli_query($sop,$sql);
$total=mysqli_num_rows($res);

$a=mysqli_fetch_array($res);
// echo $total;
if($total==1)
	
{	
	$session_id=session_id();
	$_SESSION['auth']=$session_id;
	$_SESSION['id']=$a['id'];
	$_SESSION['name']=$a['first_name'];
	$_SESSION['name1']=$a['last_name'];
	$_SESSION['role']=$a['role'];
	$role=$a['role'];
	// echo $role;
	// die;

	if($role=='admin')
	{
		
		
		header("location:admin/dashboard.php");
	}
	else if($role=='Employee')
	{
		
		header("location:employee/dashboard.php");
	}
	else if($role == 'other')
	{
		
		header("location:other/dashboard.php");
	}


}
else
{
	$_SESSION['error']='<p class="text-danger">Wrong Email Or Password!!!!</p>';
	header('location:index.php');
}


?>