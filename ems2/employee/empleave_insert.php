<?php
include "../session.php";
include "../dbe.php";

$leave_from=$_POST['leave_from'];
$leave_to=$_POST['leave_to'];
$earning_leaves=$_POST['earning_leave'];
$medical_leaves=$_POST['medical_leave'];
$casual_leaves=$_POST['casual_leave'];

$apply_by = $_POST['apply_by'];

// echo "<pre>";
// print_r($apply_by);

// die;
foreach($apply_by as $u) {
	// code...

	// code...

 

$res ="insert into apply_leave(leave_from,leave_to,earning_leave,medical_leave,casual_leave,apply_by)value('$leave_from','$leave_to','$earning_leaves','$medical_leaves','$casual_leaves','$u')";
 
mysqli_query($sop,$res);
header('location:view_leaves.php');


}



?>