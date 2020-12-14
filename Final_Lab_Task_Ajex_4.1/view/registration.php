<html>

<head>
    <title>Registration</title>
</head>

<body>


    <table width="70%">

        <tr>

            <td align="left"><a href="../index.php">
                    Login
               
            </td>

        </tr>

    </table><br><br><br>


    <center>


        <form action="../view/registrationCheck.php" method="post">

            <table border="0" cellspacing="0" cellpadding="0">


                <tr>


                    <td>

                        <fieldset>

                            <legend>Registration</legend>

                          
                           
							Id : <input type="text" name="Id"><br><br>
                            Password : <input type="password" name="password"><br><br>
							Confirm Password : <input type="password" name="confirmPassword"><br><br>
							Name : <input type="text" name="name"><br><br>
							Email : <input type="email" name="email" value="email"><br><br>
                            Date of birth : <input type="date" name="dateofBirth"><br><br>
                            Gender : <input type="radio" name="genderRadio" value="Male"> Male
                                     <input type="radio" name="genderRadio" value="Female"> Female
                                     <input type="radio" name="genderRadio" value="Others"> Others<br>
                            User type : <input type="radio" name="userRadio" value="Manager"> Manager <br>
                            <input type="radio" name="userRadio" value="Admin"> Admin <br>
                            <input type="radio" name="userRadio" value="Seller"> user <br>
                            
                            <input type="submit" name="submit" value="Register"></a>
							<a href="view/registration.php"><input type="button" name="sign" value="Login"></a>

                        </fieldset>

                    </td>

                </tr>

            </table>


        </form>


    </center>


</body>

</html>

<?php

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'password_not_match'){
			echo "Password doesn't match";
		}

		if($_REQUEST['msg'] == 'information_missing'){
			echo "Complete Login Please";
		}
        
        if($_REQUEST['msg'] == 'registration_completed'){
			echo "Registration Completed!";
		}

		
	}
?>