<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="imp_insert.php" enctype="multipart/form-data">
	
	Name:
	<input type="text" name="name">
	
	<br><br>

	Education:
	<input type="checkbox" name="course[]" value="mca">MCA
	<input type="checkbox" name="course[]" value="bca">BCA
	<input type="checkbox" name="course[]" value="ma">MA
	<input type="checkbox" name="course[]" value="ca">CA
	<br><br>
	Image:
	<input type="file" name="image">
	<br>
	
	
	<button class="btn btn-info" >Submit</button>
</form>
</body>
</html>