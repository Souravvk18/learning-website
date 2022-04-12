<?php
  $con = new mysqli('localhost','root','','buie_learning');

  if($_POST)
  {
    $email = $_POST['meail'];
    $electquery = mysqli_query($connection,"select * from register where email='{$email}'") or die(mysqli_error($connection));

    $count = mysqli_num_rows($selectquery);
    $row = mysqli_fatch_array($selectquery);
    echo $count; // For know email id exist or not.

    if($count>0)
    {
      echo $row['password'];
      /*


        Here addd sent email finction.
        video Link https://youtu.be/sScodISHEyg
        

      */
    }
  }
 ?>
