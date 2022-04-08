<?php
  sesstion_start();
  if(isset($SESSION['uname'])){
    sesstion_destroy();
    echo "<script>location.href='login_page.html'</script>";
  }else {
    echo "<script>location.href='login_page.html'</script>";
  }
 ?>
