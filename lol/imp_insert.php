<?php

include "ondb.php";

$name = $_POST['name'];

$course = $_POST['course'];

$image = $_FILES['image']['name'];
$filename = $_FILES['image']['tmp_name'];

$r = "upload/".$image;
move_uploaded_file($filename,$r);

$s = implode('/', $course);



//echo $name,$course;

$data = "insert into raj(name,course,image)value('$name','$s','$r')";

mysqli_query($con,$data);







?>