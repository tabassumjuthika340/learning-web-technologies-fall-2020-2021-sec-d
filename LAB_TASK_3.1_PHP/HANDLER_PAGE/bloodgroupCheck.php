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