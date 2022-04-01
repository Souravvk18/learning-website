<?php

  $email = $_POST['email'];
  $password = $_POST['password'];

// Database connection_aborted

// test is the table name

  new mysqli('localhost','root','','test');
  if($conn->connect_error){
    die('Connection Failed :' $conn->connect_error);
  }else{
    $conn->prepare(("insert into registration(email, password)
    values (?, ?)");
    $stmt->bind_param("siss",$email,$password);
    $stmt->execute();
    echo "Login Successfull";
    $stmt->close();
    $conn->close();
  }

?>
