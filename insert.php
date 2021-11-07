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
      <br><br><br><br><br>
    <?php
     $a = $_POST['sno'];
     $b = $_POST['inst_code'];
     $c = $_POST['inst_name'];
     $d = $_POST['dist'];
     $e = $_POST['place'];
     $f = $_POST['branch'];
     $g = $_POST['ocboys'];
     $h = $_POST['ocgirls'];
     $i = $_POST['scboys'];
     $j = $_POST['scgirls'];
     $k = $_POST['bcaboys'];
     $l = $_POST['bcagirls'];
     $m = $_POST['bcbboys'];
     $n = $_POST['bcbgirls'];
     $o = $_POST['bcdboys'];
     $p = $_POST['bcdgirls'];
     $q = $_POST['submit'];

     $dbconnect = mysqli_connect('localhost','root','','myproject');
     if(mysqli_connect_errno($dbconnect)){
       echo "failed to connect";
     }
     else{
       if(isset($q)){
       $sql = "insert into last_rank_details(SNO,inst_code,inst_name,DIST,PLACE,branch_code,OC_BO_YS,OC_GIR_LS,SC_BOY_S,SC_GIR_LS,BCA_B_OYS,BCA_GI_RLS,BCB_B_OYS,BCB_GI_RLS,BCD_B_OYS,BCD_GI_RLS) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p')";
       $run = mysqli_query($dbconnect,$sql);
       if($run == TRUE){
         echo "<h1>
         <center>
         INSERTION OF DATA IS SUCCESSFULL
         </center>
         </h1>";
       }
     }
      else{
         echo "Error";
       }
     }
     ?>
  </body>
</html>
