<?php


	echo $_POST['email'];
?>

<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Email</legend>
			<input type="email" name="email">
			<hr>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>