

<?php
include "../dbe.php";
 $a= $_POST['task'];
 $b= $_POST['assined_by'];
 $id = $_POST['id'];
 // echo "<pre>";
 //  print_r($id);
  

foreach ($id as $t) {

 $data = "insert into assingned_task(task,assined_by,id)value('$a','$b','$t')";
 mysqli_query($sop,$data);


}
 header('location:emp_task.php');
 
?>