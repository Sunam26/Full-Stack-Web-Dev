<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Request</title>
</head>
<body>
	<?php  
		$email = $_REQUEST['email'];
		echo "Email : " . $email;
	?>
</body>
</html>