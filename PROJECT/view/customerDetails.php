<?php
    if(!isset($_COOKIE['seller'])){
        header('location: ../index.php?msg=information_missing');
    }
?>

<?php 
     include('header.php')
?>
	
<body>
    
    </table>
    
    <center>
         <td align="center">
                
                <form action="">
                    
                    <table border="1" width="100%">
                        
                        <tr><th colspan="6">Client Details</th></tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Gender</th></tr>
                        
                        
                        <tr>
                            
                            <td><input type="data" name="Labiba Tabassum" value="Labiba Tabassum"></td>
                            <td><input type="data" name="LabibaC" value="LabibaC"></td>
                            <td><input type="data" name="labiba90@gmail.com" value="shafinahmed580@gmail.com"></td>
                            <td><input type="data" name="22.09.1999" value="22.09.1999"></td>
                            <td><input type="data" name="female" value="female"></td>
                        </tr>
                        
                        <tr>
                        
                            <td><input type="data" name="Ruhul Amin" value="Ruhul Amin"></td>
                            <td><input type="data" name="RuhulC" value="RuhulC"></td>
                            <td><input type="data" name="ruhul@gmail.com" value="ruhul@gmail.com"></td>
                            <td><input type="data" name="01.03.1996" value="01.03.1996"></td>
                            <td><input type="data" name="Male" value="Male"></td>
                        </tr>
						 
                        <tr>
                        
                            <td><input type="data" name="Moontarin" value="Moontarin"></td>
                            <td><input type="data" name="MoontarinC" value="MoontarinC"></td>
                            <td><input type="data" name="moon@gmail.com" value="moon@gmail.com"></td>
                            <td><input type="data" name="04.08.2000" value="04.08.2000"></td>
                            <td><input type="data" name="Female" value="Female"></td>
                        </tr>
						 
                        <tr>
                        
                            <td><input type="data" name="Anu Zakaria" value="Anu Zakaria"></td>
                            <td><input type="data" name="AnuC" value="AnuC"></td>
                            <td><input type="data" name="anu@gmail.com" value="anu@gmail.com"></td>
                            <td><input type="data" name="19.06.2005" value="19.06.2005"></td>
                            <td><input type="data" name="Male" value="Male"></td>
                        </tr>
						 
                        <tr>
                        
                            <td><input type="data" name="Lamisa" value="Lamisa"></td>
                            <td><input type="data" name="LamisaC" value="LamisaC"></td>
                            <td><input type="data" name="lamisa@gmail.com" value="lamisa@gmail.com"></td>
                            <td><input type="data" name="20.12.1995" value="20.12.1995"></td>
                            <td><input type="data" name="Female" value="Female"></td>
                        </tr>
						
						<table width="100%">

                         <tr>
                         <td align="Left"><a href="../php/logout.php">
                            Logout
                          </td>
						  </tr>
                    
                    
                </form>

                
                
                
            </td>
            
            
        </tr>
        
        
        
    </table>
        
    </center>
    
</body>
</html>
