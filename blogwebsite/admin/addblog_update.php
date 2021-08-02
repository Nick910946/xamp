<?php
include ("../dbcon.php");

$id = $_POST['id'];      
$tittle = $_POST['tittle'];
$description = $_POST['description'];
$nik = $_FILES['image']['name'];
$b = $_FILES['image']['tmp_name'];

 $file = "upload/".$nik;
move_uploaded_file($b, $file);
//  echo $tittle, $description,$file;
// die;
if($nik=="")
{
	 $data = "update bloglist SET tittle='$tittle',description='$description' where id=$id";

}
else
{
	 $data = "update bloglist SET tittle='$tittle',description='$description',image='$file' where id=$id";

}

   // echo $tittle, $description,$file;

mysqli_query($con,$data);
header("location:addblog.php")
?>

