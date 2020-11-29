<?php
    if(!isset($_COOKIE['seller'])){
        header('location: ../index.php?msg=information_missing');
    }
?>
<?php 
     include('header.php')
?>
	<body>
    
            </td>

        </tr>

    </table><br><br><br>

            <table border="1px">
                <tr>
                    <th>Picture</th>
                    <th>code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Product Status</th>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/macbook.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>111</td>
                        <td>Macbook Air</td>
                        <td>300k</td>
                        <td>
                            <button>Update</button><br><br>
							<button>Delete</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/dell2.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>112</td>
                        <td>Dell Inspiration</td>
                        <td>120k</td>
                        <td>
                            <button>Update</button><br><br>
							<button>Delete</button>
                        </td>
                    </form>

                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/dell1.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>113</td>
                        <td>Dell Latitude</td>
                        <td>25k</td>
                        <td>
                             <button>Update</button><br><br>
							<button>Delete</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/asus.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>114</td>
                        <td>Asus</td>
                        <td>80k</td>
                        <td>
                             <button>Update</button><br><br>
							<button>Delete</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/hp4.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>115</td>
                        <td>Hp Stream</td>
                        <td>94k</td>
                        <td>
                             <button>Update</button><br><br>
							<button>Delete</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/hp3.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>116</td>
                        <td>Hp Touch</td>
                        <td>38k</td>
                        <td>
                             <button>Update</button><br><br>
							<button>Delete</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/hp1.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>117</td>
                        <td>Hp Pavillion</td>
                        <td>60k</td>
                        <td>
                            <button>Update</button><br><br>
							<button>Delete</button>
                        </td>
                    </form>
                </tr>
                <tr align="center">
                    <form action="">
                        <td>
                            <img src="../assets/hp2.jpg" alt="image" width="120" height="100" srcset="">
                        </td>
                        <td>118</td>
                        <td>Hp Notebook</td>
                        <td>120k</td>
                        <td>
                             <button>Update</button><br><br>
							<button>Delete</button>
                        </td>
						
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>
    
    