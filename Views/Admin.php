<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>

<h1>This is Admin page!</h1>

<form action="add" method="POST">
	<label>Brand</label>
		<input type="text" name="brand">
	<label>Type</label>
		<input type="text" name="type">
	<label>Color</label>
		<input type="text" name="color">
	<button type="submit" value="submit" name="submit">Insert</button>	
</form>

<div>	
	<?php 
		/*
		* IndexController::showMobiles(array(numberOfRecords, 'columName1', 'columName2'...)
		* First parameter how many record be displayed, 2,3,4... parameter the name of colums
		* Colums: mobile_id, brand, type, color
		*/
		Mobile::getMobiles();
		AdminController::showMobiles(array($GLOBALS['numberOfRecord'], 'brand', 'type', 'color'));	
	?>	
</div>

</body>
</html>