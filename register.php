<?php

$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$userid = $_POST['userid'];
$password = $_POST['password'];
  // error_reporting(0);

  $conn = new mysqli('localhost','root','','buie_learning');
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into register(name,gender,age,mobilenumber,email,userid,password)values (?,?,?,?,?,?,?)");
    $stmt->bind_param("ssiisss",$name,$gender,$age,$mobilenumber,$email,$userid,$password);
    $stmt->execute();
    echo "<script>
    alert('Registation Successful')
    </script>";
    echo "<script>location.href='login_page.html'</script>";
    $stmt->close();
    $conn->close();
  }
  ?>
