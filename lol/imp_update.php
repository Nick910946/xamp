<?php
include "ondb.php";
$name = $_POST['name'];
$course =$_POST['course'];

$image = $_FILES['image']['name'];
$filename = $_FILES['image']['tmp_name'];

$r = "upload/".$image;
move_uploaded_file($filename,$r);

$w =implode('/',$course);

if ($image=="") {
	$data = "update raj set name='$name',course='$w'";

} else {
	$data = "update raj set name='$name',course='$w',image='$r'";

}


mysqli_query($con,$data);
header("location:imp.php");


?>