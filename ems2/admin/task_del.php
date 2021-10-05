<?php

include ("../session.php");

?>

<?php

include "../dbe.php";

$id= $_GET['del'];         
$a = "DELETE FROM employee WHERE id =$id";
$b = mysqli_query($sop,$a);
 header('location:show_task.php');     