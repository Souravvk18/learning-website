<?php include("index.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="UTF-8"> -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join</title>
  <!-- -----font awesome cdn link----- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/login.css">
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
          <!-- -----------------------------------------Mejor Change for Add php -------------------------------------------------- -->

          <!------------------------------------------Hear I link php login file ---------------------------------------------------- -->

          <form class="login" id="login" action="" method="get">
            <input type="text" class="input-box login-box" name="userid" placeholder="user id" required>
            <input type="password" class="input-box login-box" id="password" name="password" placeholder="password" required>
            <button type="submit" class="submit-btn login-box">SUBMIT</button>
            <a href="#">forget password</a>
          </form>
          <button type="button" class="btn1 " onclick="openRegister()"> REGISTER HERE</button>

        </div>
        <div class="card-back">

          <h2>REGISTER</h2>

          <!------------------------------------------Hear I link php Register file ---------------------------------------------------- -->

          <form class="register" id="register" action="" method="post">
            <input type="text" class="input-box register-box" name="name" placeholder="your name" required>
            <select class="input-box register-box" name="gender" required>
              <option value="student">Select Gender</option>
              <option style="color: black; font-weight: 500;" value="male">Male</option>
              <option style="color: black; font-weight: 500;" value="female">Female</option>
            </select>
            <input type="number" class="input-box register-box" name="age" placeholder="your age" required>
            <input type="number" class="input-box register-box" name="mobilenumber" placeholder="mobile no" required>
            <input type="email" class="input-box register-box" name="email" placeholder="your email" required>
            <input type="text" class="input-box register-box" name="userid" placeholder="user id" required>
            <input type="password" class="input-box register-box" name="password" placeholder="create password" required>

            <button type="submit" class="submit-btn register-submit">register</button>
          </form>
          <button type="button" class="btn1" onclick="openLogin()"> i've an account </button>
        </div>
      </div>

      <!-- -----------------------------------------Mejor Change for Add php -------------------------------------------------- -->

    </div>
  </div>

  <section>

  </section>

  <script>
    var card = document.getElementById("card");

    function openRegister() {
      card.style.transform = "rotateY(-180deg)"
    }

    function openLogin() {
      card.style.transform = "rotateY(0deg)"
    }
  </script>

  <!-- ----- custom js file link----- -->

  <script src="js/main.js"></script>

</body>

</html>
