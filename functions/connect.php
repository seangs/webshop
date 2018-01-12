<!-- for connecting the Datsbase -->
<?php

$dbconnect = mysqli_connect("localhost","root","","webstore");
//  date_default_timezone_set("Europe/Bern");  only for set the timme
//  mysqli_set_charset($connect,"utf-8");

// check connection
  if($dbconnect->connect_error){
    die("Connection failed:".$dbconnect->connect_error);
  }
  echo "Connection successfully";

  ?>
