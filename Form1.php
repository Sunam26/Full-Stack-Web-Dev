<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms</title>
</head>
<body>

	<div>
		<form action="welcome.php">
			<label for="email">Email</label>
			<input type="email" name="email"><br><br>
			<input type="submit" name="submit">
		</form>
	</div><br><br>

	<div>
		<a href="get.php?name=sunam&roll=26">Click to view data</a>
	</div><br><br>

	<div>
		<form action="post.php" method="post">
			<label for="username">Username</label>
			<input type="text" name="username"><br><br>
			<input type="submit" name="submit">
		</form>
	</div><br>

	<div>
		<form action="file.php" method="post" enctype="multipart/form-data">
			<label for="image" >Image</label>
			<input type="file" name="image"><br><br>
			<input type="submit" name="submit">
		</form>
	</div><br><br>

	<div>
		<form action="sessions.php" method="post">
			<label for="username">Name</label>
			<input type="text" name="username">
			<label for="password">Password</label>
			<input type="password" name="password"><br><br>
			<input type="submit" name="submit">
		</form>
	</div>

	<?php include 'include.php' ?>
	<!-- see here how to link another page to a button -->

	<!-- <form action="any link">
		<button type="submit" formaction="test.php">
			Submit
		</button>
	</form> -->

</body>
</html>