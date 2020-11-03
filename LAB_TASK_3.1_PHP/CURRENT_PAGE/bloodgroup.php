<?php
    if(isset($_POST['submit']))
    {
      if($_POST['bloodgroup']!=null)
      {
        foreach($_POST['bloodgroup'] as $bgroup)
        {
          echo 'Your Blood Group is:'.$bgroup;
        }          
      } 
      else 
      {
        echo 'select yours.';
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
			<legend>Blood Group </legend>
	      <select name="bloodgroup[]" >
				<option value="B+">B+</option>
				<option value="A-">A-</option>
				<option value="B-">B-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="A+" selected >A+</option>
			</select> <hr>
		    
			<input type="submit" name="submit" value="submit">  
		  </fieldset>	
	</form>
</body>
</html>
