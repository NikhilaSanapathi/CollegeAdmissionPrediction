<html>
<head>
<title>COLLEGES</title>
<style type="text/css">
table {
margin: 8px;
margin-left: auto;
  margin-right: auto;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
border: 1px solid #DDD;
}
h2{
    font-size: 2.5rem;
    font-weight: normal;
    text-align: center
  }
  .abc {
    font-size: 22px;
    background-color : transparent;
    display : block;
    color : #660000;
    text-decoration: none;
    border : 2px solid ;
    border-color : #FFCCCC;
    width: 100px;
    border-radius:24px;
  }
  #c:hover {
    font-size : 25px;
    opacity : 1.5;
    background-color : #FFCCCC;
  }
</style>
</head>
<body>
  <h2>LIST OF COLLEGES</h2>
  <center><a class="abc" id="c" href="home.html">HOME</a></center>
<?php
    $rank = $_POST['rank'];
    $branch = $_POST['branch'];
    $date = $_POST['date'];
    $caste = $_POST['caste'];

      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "myproject";
      $conn = mysqli_connect($host,  $dbUsername,  $dbPassword, $dbname);

      if (!$conn) {
        die("sorry we failed to connect : ". mysqli_connect_error());
      }
      else{
        if($caste == "OC_BO_YS"){
          $sql = "Select * FROM last_rank_details where OC_BO_YS >= '".$rank."' and branch_code = '".$branch."'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
        }
        elseif($caste == "OC_GIR_LS"){
          $sql = "Select * FROM last_rank_details where OC_GIR_LS >= ' ".$rank." ' and branch_code = '".$branch."'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
        }
        elseif($caste == "SC_BOY_S"){
          $sql = "Select * FROM last_rank_details where SC_BOY_S >= ' ".$rank." ' and branch_code = '".$branch."'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
        }
        elseif($caste == "SC_GIR_LS"){
          $sql = "Select * FROM last_rank_details where SC_GIR_LS >= ' ".$rank." ' and branch_code = '".$branch."'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
        }
        elseif($caste == "BCA_B_OYS"){
          $sql = "Select * FROM last_rank_details where BCA_B_OYS >= ' ".$rank." ' and branch_code = '".$branch."'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
        }
        elseif($caste == "BCA_GI_RLS"){
          $sql = "Select * FROM last_rank_details where BCA_GI_RLS >= ' ".$rank." ' and branch_code = '".$branch."'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
        }
        elseif($caste == "BCB_B_OYS"){
          $sql = "Select * FROM last_rank_details where BCB_B_OYS >= '.$rank.' and branch_code = '".$branch."'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
        }
        elseif($caste == "BCB_GI_RLS"){
          $sql = "Select * FROM last_rank_details where BCB_GI_RLS >= ' ".$rank." ' and branch_code = '".$branch."'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
        }
        elseif($caste == "BCD_B_OYS"){
          $sql = "Select * FROM last_rank_details where BCD_B_OYS >= ' ".$rank." ' and branch_code = '".$branch."'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
        }
        else{
          $sql = "Select * FROM last_rank_details where BCD_GI_RLS >= ' ".$rank." ' and branch_code = '".$branch."'";
          $result = mysqli_query($conn, $sql);
          $num = mysqli_num_rows($result);
        }
        if($result){
          if($num > 0){
            echo "<table>";
              echo "<tr>";
                  echo "<th>inst_code</th>";
                  echo "<th>inst_name</th>";
                  echo "<th>DIST</th>";
                  echo "<th>PLACE</th>";
                  echo "<th>branch_code</th>";
              echo "</tr>";
              while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                  echo "<td>" . $row['inst_code'] . "</td>";
                  echo "<td>" . $row['inst_name'] . "</td>";
                  echo "<td>" . $row['DIST'] . "</td>";
                  echo "<td>" . $row['PLACE'] . "</td>";
                  echo "<td>" . $row['branch_code'] . "</td>";
                echo "</tr>";
              }
            echo "</table>";
            mysqli_free_result($result);
          }
        }
      }
?>
</body>
</html>
