<?php
	
	$day = "";
	$month = "";
	$year = "";

	if(isset($_REQUEST['submit'])){ 
    $day =  $_REQUEST['day'];
    $month =  $_REQUEST['month'];
    $year = $_REQUEST['year'];
	}
?>	
	
<head>
	<title>HTML forms-Date of Birth</title>
</head>
<body>
	<form method="post">
	      <fieldset>
			<legend><b>Date of Birth</b></legend>
		        dd         mm        yyyy<br>
			<input type="tel" size="2" name="day" value="<?=$day?>">/
            <input type="tel" size="2" name="month"value="<?=$month?>">/
            <input type="tel" size="4" name="year"value="<?=$year?>">
				<hr>
			
			<input type="submit" name="submit">  
		  </fieldset>	
	</form>
</body>
</html>
