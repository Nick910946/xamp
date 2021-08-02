<?php 
include "session.php";

  ?>


<?php

include "../dbcon.php";

$id = $_POST['id'];      
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$description = $_POST['description'];

$nik = $_FILES['image']['name'];
$b = $_FILES['image']['tmp_name'];

 $file = "upload/".$nik;
move_uploaded_file($b, $file);

//echo $name,$email,$password,$description,$file;

if($nik=="")
{
	 $data = "update admin SET name='$name',email='$email', password='$password',description='$description' where id=$id";

}
else
{
	 $data = "update admin SET name='$name',email='$email', password='$password',description='$description',image='$file' where id=$id";

}


mysqli_query($con,$data);
header('location:Add_admin.php');

?>