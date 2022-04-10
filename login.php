<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Database Connection here
    $con = new mysqli('localhost','root','','buie_learning');
    if($con->connect_error){
      die('Connection Failed :'.$con->connect_error);
    }else {
      $stmt = $con->prepare("select * from register where email = ?");
      $stmt->bind_param("s",$email);
      $stmt->execute();
      $stmt_result = $stmt->get_result();
      if ($stmt_result->num_rows > 0) {
        $data = $stmt_result-> fetch_assoc();
        if($data['password']===$password){
          echo "<script>
          alert('Login Successful')
          </script>";
          echo "<script>location.href='home_page.html'</script>";
        }else {
          echo "<script>
          alert('Invalid Email or Password')
          </script>";
          echo "<script>location.href='login_page.html'</script>";
        }
      }else {
        echo "<script>
        alert('Invalid Email or Password')
        </script>";
        echo "<script>location.href='login_page.html'</script>";
      }
    }
 ?>
