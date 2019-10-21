<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>welcome</title>
    <link rel="stylesheet" href="styles.css">

  </head>
  <body class="weldiv" background="images/wallpaper2.jpg">
    <p class=""></p>
<?php
session_start();
$username = $_SESSION['username'];
echo "<p class = 'welpdiv' >welcome ".$username."</p>";
 ?>
  </body>
</html>
