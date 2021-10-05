<?php
include "../dbe.php";

if(isset($_POST['approved']))
{

	 $status="Approved";
	 $comment=$_POST['comment'];
	 $a_id=$_POST['a_id'];

	$data = "update apply_leave set status='$status',comment='$comment' where a_id = $a_id";
	mysqli_query($sop,$data);
	header("location:empview_leave.php");
}

if(isset($_POST['rejected']))
{

	echo $status ="Rejected";
	echo $comment = $_POST['comment'];
	echo $a_id = $_POST['a_id'];

	$data = "update apply_leave  set  status='$status', comment='$comment' where a_id = $a_id";
	mysqli_query($sop,$data);
	header("location:empview_leave.php");
}


?>