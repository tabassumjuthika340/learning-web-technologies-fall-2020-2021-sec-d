<?php
	
	$data = "";

	if(isset($_REQUEST['submit'])){
		$gender = $_REQUEST['gender'];
		
		if($gender == ""){
			echo " field required...";
		}else{
			$data = $gender;
		}
	}
?>


<html>
<head>
    <title>Gender</title>
</head>
<body>
    <form method="post">
        <fieldset>
            <legend>Gender</legend>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <input type="radio" name="gender" value="Others">Others
            <hr>
            <input type="submit" name="submit">
			 <input type="text" name="field" value="<?=$data?>">
        </fieldset>
    </form>
</body>
</html>
