<?php
include "../session.php";
include "../dbe.php";

$valid_from=$_POST['valid_from'];
$valid_to=$_POST['valid_to'];
$earning_leaves=$_POST['earning_leave'];
$medical_leaves=$_POST['medical_leave'];
$casual_leaves=$_POST['casual_leave'];
$assigned_to = $_POST['assigned_to'];
$assigned_by = $_SESSION['id'];
// echo "<pre>";
// print_r($assigned_to);

// die;
foreach($assigned_to as $u) {
	// code...

	// code...

 

$res ="insert into assign_leave(valid_from,valid_to,earning_leaves,medical_leaves,casual_leaves,assigned_to,assigned_by)value('$valid_from','$valid_to','$earning_leaves','$medical_leaves','$casual_leaves','$u','$assigned_by')";
 
mysqli_query($sop,$res);
header('location:assign_leave.php');


}



?>