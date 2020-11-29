<?php
    if(!isset($_COOKIE['seller'])){
        header('location: ../index.php?msg=information_missing');
    }
?>

<<?php 
     include('header.php')
?>
	
<body>
    
		    <img src="../assets/advertise.jpg" alt="image" width="700" height="300" srcset="">
            <h1><b>Attension!</b></h1>
                
				<table border="1" width="100%">
                        
                        <tr><th colspan="6">Advertise Coupon</th></tr>
                        <tr><th>Coupon Offers</th>
                        <th>Valid Till</th>
						<th>Update</th>
                     

                        <tr>
                            <td>Eis Dhamaka</td>
                            <td>11.10.2020-21.11.2020</td>
                            
                            <td><input type="button" name="update" value="Update"></td>
                        
                        </tr>
                        
                        <tr>
                        <td>Friday Offer</td>
                            <td>11.02.2020</td>
                           
                            <td><input type="button" name="update" value="Update"></td>
                            
                            
                        </tr>

                        <td>Puja Hit</td>
                            <td>13.11.2020-12.12.2020</td>
                            
                            <td><input type="button" name="update" value="Update"></td>
                            
                        
                    </table> 
             
        
        
    </table>
        
    </center>
    
</body>
</html>