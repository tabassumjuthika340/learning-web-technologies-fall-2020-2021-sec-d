<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$email = $_REQUEST['email'];
		
		if($email == ""){
			echo " field required...";
		}else{
			$data = $email;
		}
	}
?>
<html>
<head>
	<title>Email</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Email</legend>
			<input type="email" name="email"value=" <?=$data ?>">
			<hr>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>