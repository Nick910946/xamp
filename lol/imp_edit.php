<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 
 <?php
include "ondb.php";
$a = "select * from raj";
$b = mysqli_query($con,$a);
$c = mysqli_fetch_array($b);


$p = $c['course'];
$q = explode('/', $p);
 ?>

<form method="post" action="imp_update.php" enctype="multipart/form-data">
	
	Name:
	<input type="text" name="name" value="<?php echo $c['name'] ?>">
	
	<br><br>


	Education:
	<input type="checkbox" name="course[]" value="mca"
	<?php

	if (in_array('mca',$q)) {
		echo "checked";
	}


	?>

	>MCA
	<input type="checkbox" name="course[]" value="bca"

	<?php

	if (in_array('bca',$q)) {
		echo "checked";
	}


	?>




	>BCA
	<input type="checkbox" name="course[]" value="ma"

	<?php

	if (in_array('ma',$q)) {
		echo "checked";
	}


	?>




	>MA
	<input type="checkbox" name="course[]" value="ca"

	<?php

	if (in_array('ca',$q)) {
		echo "checked";
	}


	?>



	>CA
	<br><br>

	Image:
	<input type="file" name="image">
	<img src="<?php echo $c['image']?>">
	<br>
	
	
	<button class="btn btn-info" >update</button>
</form>
</body>
</html>