<?php
include "../dbe.php";
  $a= $_POST['task'];
 $b= $_POST['reply'];
 $tid = $_POST['t_id'];
 $reply = $_POST['reply_by'];
// die;
  // "<pre>";
  // print_r($id); 
  



 $data = "insert into reply_task(task,reply,t_id,reply_by)value('$a','$b','$tid','$reply')";
 mysqli_query($sop,$data);



 header('location:employeereplied_task.php');
 
?>