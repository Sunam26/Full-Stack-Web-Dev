<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Request</title>
</head>
<body>
	<?php  
		$name = $_GET['name'];
		$roll = $_GET['roll'];

		echo "Name : " . $name . "     " . "Roll : " . $roll;
	?>
</body>
</html>