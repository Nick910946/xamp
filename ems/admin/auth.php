<?php

$role=$_SESSION['role'];
if($role == 'Employee'){

	header('location:../employee/dashboard.php');
}


?>