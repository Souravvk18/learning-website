 <?php
     $email = $_POST['email'];
     $password1 = $_POST['password1'];
     $password2 = $_POST['password2'];
     // Database Connection here
     $con = new mysqli('localhost','root','','buie_learning');
     if($con->connect_error)
     {
       die('Connection Failed :'.$con->connect_error);
     }
     else
     {
       $stmt = $con->prepare("select * from register where email = ?");
       $stmt->bind_param("s",$email);
       $stmt->execute();
       $stmt_result = $stmt->get_result();
       if ($stmt_result->num_rows > 0)
       {
         $data = $stmt_result-> fetch_assoc();
         if($data['password2']!==$password1)
         {
           echo "<script>alert('Password not Match')</script>";
           echo "<script>location.href='forgot_password.html'</script>";
           $stmt->close();
           $conn->close();
         }
         else
         {
         $stmt = $con->prepare("insert into register(name,gender,age,mobilenumber,email,userid,password)values (?,?,?,?,?,?,?)");
         $stmt->bind_param("ssiisss",$name,$gender,$age,$mobilenumber,$email,$userid,$password);
         $stmt->execute();
         echo "<script>
         alert('Password Change Successful')
         </script>";
         echo "<script>location.href='login_page.html'</script>";
         $stmt->close();
         $conn->close();
       }
     }
     else
     {
       echo "<script>
       alert('Email ID soes not exit on our Database')
       </script>";
       echo "<script>location.href='register_page.html'</script>";
     }
   }
  ?>
