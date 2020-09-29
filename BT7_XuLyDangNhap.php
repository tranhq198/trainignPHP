<?php
   if (isset($_POST['submit'])) {
       $username = $_POST['username'];
       $password = $_POST['password'];
       if($username == "admin" && $password == "12345") {
           $_SESSION['username'] = $username;
           header('Location: BT7_NhapThongTin.php ');
       } else {
           echo "Tên đăng nhập hoặc mật khẩu không đúng !";
       }
   }
?>