<?php
    if(!isset($_COOKIE['seller'])){
        header('location: ../index.php?msg=information_missing');
    }
?>

<?php 
     include('header.php')
?>
	
<body>
    <tr>
        <td>
            <table border="1px">
                <tr>
                    <th>Picture</th>
                    <th>Customer Rating(out of 10)</th>
                    <th>Customer Review</th>
                  
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/macbook.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>6/10</td>
                        <td>Average</td>
                        
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/dell2.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>9/10</td>
                        <td>Good!I am satisfied using this.</td>
                       
                    </form>

                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/dell1.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>6.5/10</td>
                        <td>Not so good</td>
                       
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/asus.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>4/10</td>
                        <td>Dissapointing</td>
                        
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/hp4.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>7.8/10</td>
                        <td>Good enough</td>

                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/hp3.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>8.9/10</td>
                        <td>Super</td>
                       
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/hp1.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>2/10</td>
                        <td>Dissapointing</td>
                       
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/hp2.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>10/10</td>
                        <td>Best!</td>
                       
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>
    
    