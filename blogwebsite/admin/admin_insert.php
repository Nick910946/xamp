<?php
include ("../dbcon.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$description = $_POST ['description'];

$nik = $_FILES['image']['name'];
$b = $_FILES['image']['tmp_name'];

 $file = "upload/".$nik;
move_uploaded_file($b, $file);


// echo $name,$email,$password,$description,$file;
// die;

   // echo $tittle, $description,$file;
$data = "insert into admin(name,email,password,description,image)value('$name','$email','$password','$description','$file')";


mysqli_query($con,$data);
header("location:Add_admin.php")
?>