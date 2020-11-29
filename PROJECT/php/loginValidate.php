<?php

if(isset($_REQUEST['submit'])){
    
    $count = 0;
    
    if(!empty($_REQUEST['username']) and !empty($_REQUEST['password'])){
        
        $myfile = fopen('../assets/Info.txt', 'r');
	while ($data = fgets($myfile)) {
		
        $Info = explode("|", $data);
        
        if($Info[0]==$_REQUEST['password'] and $Info[2]==$_REQUEST['username']){
            
            setcookie("seller", "flag", time()+700, '/');
            header('location: ../view/sellerHomepage.php');
            $count = $count + 1;
            break;
            
        }
        
        elseif($Info[0]==$_REQUEST['password'] and $Info[2]==$_REQUEST['username']){
            
            setcookie("customer", "flag", time()+700, '/');
            header('location: ../view/customer_home.php');
            $count = $count + 1;
            break;
            
        }
        
        elseif($Info[0]==$_REQUEST['password'] and $Info[2]==$_REQUEST['username']){
            setcookie("admin", "flag", time()+700, '/');
            header('location: ../view/admin_home.php');
            $count = $count + 1;
            break;
            
        }
        
        elseif($Info[0]==$_REQUEST['password'] and $Info[2]==$_REQUEST['username']){
            
            setcookie("manager", "flag", time()+700, '/');
            header('location: ../view/manager_home.php');
            $count = $count + 1;
            break;
		} 
        
		
	}
	
	
    
    
	fclose($myfile);
        
    if($count==0){header('location: ../index.php?msg=invalid');}
        
    }
    
    else{
        
        header('location: ../index.php?msg=information_missing');
        
    }
    
}

    else{
    
        header('location: ../index.php');
    
}



?>
