<?php
$dbconnect = mysqli_connect('localhost','root','','myproject');
if(mysqli_connect_errno($dbconnect)){
  echo "failed to connect";
}
else{
  echo "ok";
}
?>
