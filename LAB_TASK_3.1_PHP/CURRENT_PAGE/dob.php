<?php

echo "Date of Birth: ".$_POST['day']."/".$_POST['month']."/".$_POST['year'];



?>
<html>
<head>
	<title>HTML forms-Date of Birth</title>
</head>
<body>
	<form method="post">
	      <fieldset>
			<legend><b>Date of Birth</b></legend>
		        dd         mm        yyyy<br>
			<input type="tel" size="2" name="day">/
            <input type="tel" size="2" name="month">/
            <input type="tel" size="4" name="year">
				<hr>
			
			<input type="submit" name="submit">  
		  </fieldset>	
	</form>
</body>
</html>
