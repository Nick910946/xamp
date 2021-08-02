<?php

include ("session.php");

?>

<?php

include "../dbcon.php";

$id= $_GET['del'];         
$a = "DELETE FROM bloglist WHERE id =$id";
$b = mysqli_query($con,$a);
 header('location:addblog.php'); 

?>