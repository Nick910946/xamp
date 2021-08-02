
<?php

include ("../dbcon.php");

$tittle = $_POST['tittle'];
$description = $_POST['description'];
$nik = $_FILES['image']['name'];
$b = $_FILES['image']['tmp_name'];

 $file = "upload/".$nik;
move_uploaded_file($b, $file);

   // echo $tittle, $description,$file;
$data = "insert into bloglist(tittle,description,image)value('$tittle','$description','$file')";

mysqli_query($con,$data);
header("location:addblog.php")
?>