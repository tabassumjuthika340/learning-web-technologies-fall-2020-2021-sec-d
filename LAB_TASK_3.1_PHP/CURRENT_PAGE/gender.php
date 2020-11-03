<?php
    if(isset($_POST['submit']))
    {
		  $gender=$_POST['gender'];
		  echo "Your Gender is ".$gender;
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
        </fieldset>
    </form>
</body>
</html>
