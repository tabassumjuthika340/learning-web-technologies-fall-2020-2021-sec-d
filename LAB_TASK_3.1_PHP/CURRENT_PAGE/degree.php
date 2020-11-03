<?php
    if(isset($_POST['submit']))
    {
      if($_POST['degree']!=null)
      {
        echo "Your Degrees is,<br>";
        foreach($_POST['degree'] as $deg)
        {
          echo $deg."<br>";
        }
      }
      else
      {
        echo "you have no degree";
      }
    }
?>

<html>
<head>
	<title>HTML forms</title>
</head>
<body>


	<form method="post">
	      <fieldset>
            <legend><b>DEGREE</b></legend>
            <input type="checkbox" value="SSC" name="degree[]">SSC
            <input type="checkbox" value="HSC" name="degree[]">HSC
            <input type="checkbox" value="BSc" name="degree[]">BSc
            <input type="checkbox" value="MSc" name="degree[]">MSc
            <hr>
            <input type="submit" name="submit">  
		  </fieldset>	
	</form>
</body>
</html>
