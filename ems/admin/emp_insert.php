
<?php
include "../session.php";

include "../dbe.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password  =md5 ($_POST['password']); 
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$role = $_POST['role'];


// echo $fname,$lname,$email,$pass,$phone,$age,$gender, $department,$role;
// die;

$data = "insert into employee(first_name,last_name,email,password,phone,age,gender,department,role)value('$first_name','$last_name','$email','$password','$phone','$age','$gender','$department','$role')";

 mysqli_query($sop,$data);
 header('location:emp_display.php');

?>