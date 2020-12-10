<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    <h1><a href="new_user.php">New_User</a></h1>
    </head>
    <body>
        <h2>Login</h2>
        <?php include 'connection.php';?>
       <form action="check_user.php" method="post">
  <label for="user">User:</label><br>
  <input type="text" id="user" name="user"><br>
  <label for="pass">Password:</label><br>
  <input type="text" id="pass" name="pass">
  <br>
  <br>
  <input type="submit" value="Submit">

</form>
        
    </body>
</html>
