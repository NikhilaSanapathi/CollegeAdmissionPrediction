<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INSERTING DATA</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="lo">
      <ul>
    <li style="margin-right:200px;"><a href="home.html"><i class="fa fa-power-off"></i>LOG-OUT</a></li>
      <li><a href="insert.html"><i class="fa fa-pencil-square-o"></i>INSERT DATA</a></li>
      <li><a href="update.html"><i class="fa fa-tasks"></i>UPDATE DATA</a></li>
      <li><a href="delete.html"><i class="fa fa-window-close"></i>DELETE DATA</a></li>
        </ul>
      </div>
      <br><br><br><br><br><br>
<?php
    $sno = $_POST['id'];
    $delete = $_POST['delete'];
     $dbconnect = mysqli_connect('localhost','root','','myproject');
     if(mysqli_connect_errno($dbconnect)){
       echo "failed to connect";
     }
     else{
       if (!empty($sno)) {
       if(isset($delete)){
         $sql = "delete from last_rank_details where SNO = '".$sno."'";
         $run = mysqli_query($dbconnect,$sql);
         if($run == TRUE){
           echo "<h1><center>DATA IS DELETED</center></h1>";
         }
         else{
           echo "<h1><center>DATA IS NOT DELETED</center></h1>";
         }
       }
     }
     else{
       echo "<h1><center>All Fields are required</center></h1>";
     }
     }
 ?>
</body>
</html>
