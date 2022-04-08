<?php
  $host="localhost"  ;
  $user="root";
  $password="";
  $database="buie_learning";

  mysql_connect($host,$user,$password);
  mysql_select_database($database);

  if(isset($_POST['gmail']))
  {
    $gmail=$_POST['gmail'];
    $password$_POST['password'];

    $sql="select * from buie_learning where email ='".$gmail."'AND password'".$password."' limit 1";

    $result=mysql_query($sql);

    if(mysql_num_row($result)==1){
      echo "You Have Successfully Login";
      exit();
    }else {
      echo "You habe enter wrong email or password";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="UTF-8"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <!-- -----font awesome cdn link----- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login_register.css">
</head>

<body>

  <div class="container">
    <header>
      <a href="index.html" class="logo">BUI<span>E-learning</span></a>
      <div id="menu" class="fas fa-bars"></div>

      <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="courses.html">Courses</a>
        <a href="onlineide/onlineide.html">Online IDE</a>
        <a href="about.html">About</a>
      </nav>

    </header>
  </div>

  <div class="contain">
    <div class="card">
      <div class="inner-box" id="card">
        <div class="card-front">
          <h2>LOGIN</h2>

          <form class="login" id="login" action="login.php" method="POST">
            <input type="text" class="input-box" name="gmail" placeholder="Your Email" required>
            <input type="password" class="input-box" id="password" name="password" placeholder="Password" required>
            <button type="submit" class="submit-btn">SUBMIT</button>
          </form>

          <a class="btn1" href="register_page.html"> REGISTER HERE </a>

        </div>
      </div>
    </div>
  </div>

  <script src="js/main.js"></script>

</body>

</html>
