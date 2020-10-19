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
	<?php IndexController::showMobiles(array(3, 'brand', 'type', 'color'));	?>	
</div>

</body>
</html>