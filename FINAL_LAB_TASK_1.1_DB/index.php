
<html>
<head>
    <title>Coupon Management System</title>
</head>
<body>
    <center>
    <table width="80%" allign="center">
        <tr align="center">

            <td><a href="index.php"><img src="assets/couponlogo.jpg" alt="Logo" width="320px"></a></td>
			
        </tr>

    </table><br><br><br><br><br><br>



        <table border="0">


            <tr>
                <th>
                    <h1>Login</h1>
                </th>
            </tr>

    <center>
            <tr>

                <td>

                    <form action="php/loginValidate.php" method="post">

                        <input type="text" name="username" placeholder="Enter Username"><br><br>
                        <input type="password" name="password" placeholder="Enter Password"><br><br>
						<input type="submit" name="submit" value="login"></a><br><br>
                        <a href="view/registration.php"><input type="button" name="sign" value="Create Account"></a>
                    </form>

                </td>

            </tr>

        </table>

    </center>

</body>

</html>
<?php

	if(isset($_REQUEST['msg'])){
		if($_REQUEST['msg'] == 'information_missing'){
			echo "Complete login please";
		}

		if($_REQUEST['msg'] == 'invalid'){
			echo "Invalid";
		}
        
        

		
	}
?>
