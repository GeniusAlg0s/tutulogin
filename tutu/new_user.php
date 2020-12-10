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
    </head>
    <body>
         <?php include 'connection.php';?>
        <form action="insert.php" method="post">
  <label for="user">User:</label><br>
  <input type="text" id="user" name="user"><br>
  <label for="pass">Password:</label><br>
  <input type="text" id="pass" name="pass">
  <br>
  <br>
  <input type="submit" value="Submit">
 <button onclick="index.php'">Continue</button>

    </body>
</html>
