<?php

  $name = $_POST['name'];
  $mobilenumber = $_POST['mobilenumber'];
  $email = $_POST['email'];
  $password = $_POST['password'];

// Database connection_aborted

// test is the table name

  new mysqli('localhost','root','','test');
  if($conn->connect_error){
    die('Connection Failed :' $conn->connect_error);
  }else{
    $conn->prepare(("insert into registration(name, mobilenumber, email, password)
    values (?, ?, ?, ?)");
    $stmt->bind_param("siss",$name, $mobilenumber, $email,$password);
    $stmt->execute();
    echo "Registration Successfull";
    $stmt->close();
    $conn->close();
  }

?>
