<?php



session_start();




include "../dbcon.php";
$email = $_POST['email'];
$password = $_POST['password'];
 $data = "select * from admin where email ='$email' and password ='$password'";
$data = mysqli_query($con,$data);
// echo "<pre>";
// print_r($data);


echo $total= mysqli_num_rows($data);

$a = mysqli_fetch_array($data); 
 if($total == 1){

 	$_SESSION['name']=$a['name'];  
 	$_SESSION['image']=$a['image'];
 	$_SESSION['email']=$a['email'];

 	header('location:dashboard.php');
 }
  else{
  	echo "worng email OR password";
  }

?>


