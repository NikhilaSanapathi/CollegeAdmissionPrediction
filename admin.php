<!DOCTYPE html>
</html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LOGIN FORM</title>
 <link rel="stylesheet" href="nikhi.css">
  </head>
  <body>
    <br><br><br><br><br>
    <h2><u><center>ONLY FOR ADMINS</center></u></h2>
    <div>
    <form class="box" method="post">
      <h1>Login</h1>
      <input type="text" name="email" placeholder="Email" required>
      <input type="Password" name="password" placeholder="Password" required>
      <input type="Submit" name="login" value="Login">
      <a href="home.html">HOME</a>
    </form>
  </div>
  <?php
      $dbconnect = mysqli_connect('localhost','root','','myproject');
      if(mysqli_connect_errno()){
        echo "failed to connect";
      }
      else{
      if(isset($_POST['login']))
      {
        $query = "select * from admin where admin_name = '".$_POST['email']."' AND password = '".$_POST['password']."'";
        $result = mysqli_query($dbconnect,$query);
        $row = mysqli_num_rows($result);
        if($row){
          session_start();
          header("location: login.html");
        }
        else{
          echo "<script>alert('Incorrect Password')</script>";
        }
        mysqli_free_result($result);
      }
    }
   ?>
  </body>
</html>
