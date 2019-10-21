<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>registration form</title>
    <link rel="stylesheet" href="styles.css">

  </head>
  <body background = "images/wallpaper2.jpg">
    <p class="ppdiv">Registration form</p>
    <div class="regdiv">


    <form class="" action="#" onsubmit ="return regemailFormat();" method="post">
      <p>username</p>
      <input id="regusername" type="text" name="username"   placeholder="username">
      <p>Email</p>
      <input id="regemail" type="text" name="email" placeholder="email">
      <p>Password</p>
      <input id="regpassword" type="password" name="password" placeholder="password">
      <input type="submit" name="submit" value="Register" onclick="validate_register()" >
    </form>
    </div>
    <script src="index.js" charset="utf-8"></script>
    <?php
session_start();
if(isset($_POST['submit'])){
  $con= mysqli_connect('localhost','root','','registration')or die("Connection failed: " . mysqli_connect_error());

$email= $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
if($username!=""&&$password!=""&&$email!=""){
  $query1 = mysqli_query($con,"select * from users where email = '".$email."' ")or die (mysqli_error());
  $row = mysqli_fetch_row($query1);
  if($row){
    echo  "<script language='javascript'>
alert('sorry this email already exists , invalid credentials');
</script>";

  }
  else {
    $query = mysqli_query($con,"insert into users (`email`,`password`,`username`)values('$email','$password','$username' )");
    $_SESSION['username']=$username;
    header('location:welcome.php');
  }
}


}




     ?>
  </body>
</html>
