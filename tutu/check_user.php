<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connection.php';

        $user = $_POST["user"]; 
        $pass = $_POST["pass"]; 

     
        $sql = "SELECT * FROM login.users WHERE user = '$user' and password= '$pass'";
       
        
        $r = mysqli_query($conn, $sql);
        
      
        if(mysqli_num_rows($r))
            {
        
            echo 'login successful!';
        }
        else
        {
            echo 'The useruser or password are incorrect!';
        }


?>