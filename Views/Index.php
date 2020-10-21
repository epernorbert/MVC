<!DOCTYPE html>
<html>
<head>
	<title>Index page</title>
</head>
<body>

<h1>Welcome on home page!</h1>

<!-- 
	IndexController::showMobiles(array(numberOfRecords, 'columName1', 'columName2'...)
	First parameter how many record be displayed, 2,3,4... parameter the name of colums
	Colums: mobile_id, brand, type, color
-->
<div>	
	<?php IndexController::showMobiles(array(2, 'brand', 'type')); ?>
</div>


</body>
</html>