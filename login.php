<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="styles.css">

  </head>
  <body background = "images/wallpaper2.jpg">
<p class="pdiv">Login form</p>
    <div class="logindiv">


    <form name="loginform" action="#" onsubmit=" return loginemailFormat() " method="POST">
<p>Email</p>
    <input id="emailfeild" type="text" placeholder="Enter Email" name="email" >
<p>Password</p>
    <input id="passfeild" type="password" placeholder="Enter Password" name="password" >
    <input name="submit"  type="submit" value="Login" onclick="valid();">
  </form>
  </div>

  <script src= "index.js" charset="utf-8"></script>

  <?php

  session_start();
  if(isset($_POST['submit']))
  {
  $con  = mysqli_connect('localhost','root','','registration') or die("Connection failed: " . mysqli_connect_error());
  // mysqli_select_db('registration') or die(mysqli_error());
   $email=$_POST['email'];
   $pwd=$_POST['password'];

   if($email!=''&&$pwd!='')
   {
     $query=mysqli_query($con,"select * from users where email ='".$email."' and password ='".$pwd."'") or die(mysqli_error());
     $res=mysqli_fetch_row($query);
     if($res)
     {
      $_SESSION['username']=$res[2];
      header('location:welcome.php');
     }
     else
     {
      echo "<script language='javascript'>
  alert('You entered email or password is incorrect');
  </script>";

     }
   }
   else
   {
  //  echo'Enter both email and password';
   }
  }
  ?>








  </body>
</html>
