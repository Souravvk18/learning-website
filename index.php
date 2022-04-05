<?php
  // error_reporting(0);

  $server = "localhost";
  $username = "root";
  $password = "";
  $databasename = "buie_learning";

  $con = mysqli_connect($server,$username,$password,$databasename);

// OR we can use this also
//  $mysql = new mysqli("localhost","root","","buie_learning");

  if($con)
  {
    // echo "Connection Ok.............";
  }else {
    echo "Connection failed".mysqli_connect_error();
  }
?>
