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


        <form action="../php/registrationCheck.php" method="post">

            <table border="0" cellspacing="0" cellpadding="0">


                <tr>


                    <td>

                        <fieldset>

                            <legend>Registration</legend>

                          
                            Name : <input type="text" name="name"><br><br>
                            Username: <input type="text" name="username"><br><br>
                            Email : <input type="email" name="email" value="email"><br><br>
                            Password : <input type="password" name="password"><br><br>
							Confirm Password : <input type="password" name="confirmPassword"><br><br>
                            Date of birth : <input type="date" name="dateofBirth"><br><br>
                            Gender : <input type="radio" name="genderRadio" value="Male"> Male
                                     <input type="radio" name="genderRadio" value="Female"> Female
                                     <input type="radio" name="genderRadio" value="Others"> Others<br>
                            User type : <input type="radio" name="userRadio" value="Manager"> Manager <br>
                            <input type="radio" name="userRadio" value="Admin"> Admin <br>
                            <input type="radio" name="userRadio" value="Seller"> Seller <br>
                            <input type="radio" name="userRadio" value="Customer">customer <br> <br>
                            <input type="submit" name="submit" value="submit">

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