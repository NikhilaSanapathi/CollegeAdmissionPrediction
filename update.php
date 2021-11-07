<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>INSERTING DATA</title>
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style media="screen">

    </style>
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
      <?php
      $sno = $_POST['id'];
      $col = $_POST['col'];
      $new = $_POST['newvalue'];
      $conn = mysqli_connect('localhost','root','','myproject');
      if(mysqli_connect_errno($conn)){
        echo "failed to connect";
      }
      else{
        if(isset($_POST['update'])){
          if($col == "inst_code"){
            $sql = "update last_rank_details set inst_code = '".$new."' where SNO = '".$sno."'";
            $result = mysqli_query($conn,$sql);
          }
          elseif($col == "inst_name"){
            $sql = "update last_rank_details set inst_name = '".$new."' where SNO = '".$sno."'";
            $result = mysqli_query($conn,$sql);
          }
          elseif($col == "DIST"){
            $sql = "update last_rank_details set DIST = '".$new."' where SNO = '".$sno."'";
            $result = mysqli_query($conn,$sql);
          }
          elseif($col == "PLACE"){
            $sql = "update last_rank_details set PLACE = '".$new."' where SNO = '".$sno."'";
            $result = mysqli_query($conn,$sql);
          }
          elseif($col == "branch_code"){
            $sql = "update last_rank_details set branch_code = '".$new."' where SNO = '".$sno."'";
            $result = mysqli_query($conn,$sql);
          }
          elseif($col == "OC_BO_YS"){
            $sql = "update last_rank_details set OC_BO_YS = ' ".$new." ' where SNO = '".$sno."'";
            $result = mysqli_query($conn, $sql);
          }
          elseif($col == "OC_GIR_LS"){
            $sql = "update last_rank_details set OC_GIR_LS = ' ".$new." ' where SNO = '".$sno."'";
            $result = mysqli_query($conn, $sql);
          }
          elseif($col == "SC_BOY_S"){
            $sql = "update last_rank_details set SC_BOY_S = ' ".$new." ' where SNO = '".$sno."'";
            $result = mysqli_query($conn, $sql);
          }
          elseif($col == "SC_GIR_LS"){
            $sql = "update last_rank_details set SC_GIR_LS = ' ".$new." ' where SNO = '".$sno."'";
            $result = mysqli_query($conn, $sql);
          }
          elseif($col == "BCA_B_OYS"){
            $sql = "update last_rank_details set BCA_B_OYS = ' ".$new." ' where SNO = '".$sno."'";
            $result = mysqli_query($conn, $sql);
          }
          elseif($col == "BCA_GI_RLS"){
            $sql = "update last_rank_details set BCA_GI_RLS = ' ".$new." ' where SNO = '".$sno."'";
            $result = mysqli_query($conn, $sql);
          }
          elseif($col == "BCB_B_OYS"){
            $sql = "update last_rank_details set BCB_B_OYS = ' ".$new." ' where SNO = '".$sno."'";
            $result = mysqli_query($conn, $sql);

          }
          elseif($col == "BCB_GI_RLS"){
            $sql = "update last_rank_details set BCB_GI_RLS = ' ".$new." ' where SNO = '".$sno."'";
            $result = mysqli_query($conn, $sql);

          }
          elseif($col == "BCD_B_OYS"){
            $sql = "update last_rank_details set BCD_B_OYS = ' ".$new." ' where SNO = '".$sno."'";
            $result = mysqli_query($conn, $sql);

          }
          else{
            $sql = "update last_rank_details set BCD_GI_RLS = ' ".$new." ' where SNO = '".$sno."'";
            $result = mysqli_query($conn, $sql);
          }
            if($result == TRUE){
            echo "<h1><center>
            UPDATION OF DATA IS SUCCESSFULL
            </center></h1>";
          }
        }
          else{
            echo "<h1><center>
            Failed to update
            </center></h1>";
          }
      }

       ?>
  </body>
</html>
