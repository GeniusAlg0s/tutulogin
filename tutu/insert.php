<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'connection.php';

//$sql = "INSERT INTO login.users (user, password) VALUES
          //  ('black', 'test')";
$sql = "INSERT INTO login.users (user, password) VALUES
          ('" . $_POST["user"] . "','" . $_POST["pass"] . "')";


if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
