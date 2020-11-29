<?php
    if(!isset($_COOKIE['seller'])){
        header('location: ../index.php?msg=information_missing');
    }
?>
<?php 
     include('header.php')
?>
	
<body>
    <table width="100%">
 
<tr align="center">
        <td>
		     <img src="../assets/confirmed.jpg" alt="image" width="300" height="300" srcset="">
			 Message
             <input type="text" size="70" placeholder="Sir/Mam, We have confirmed your order.It will be delivered to you soon."><br><br>
             <input type="submit" name="submit" value="Send">
        </td>
    </tr>
    <tr>
        
    </table>   
</body>
</html>
 