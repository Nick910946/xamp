<?php
include "../dbe.php";

 $adminmsg = $_POST['adminmessage'];
 $reply_id = $_POST['r_id'];

$data = "update reply_task set adminmessage = '$adminmsg' where r_id = '$reply_id'";

mysqli_query($sop,$data);
header('location:admin_reply.php');

?>