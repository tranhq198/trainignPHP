<?php
    session_start();

    var_dump($_SESSION['username'])
?>

<?php
    //
if(isset($_SESSION['username'])){
    header('Location: BT7_NhapThongTin.php ');
}

   if (isset($_POST['submit'])) {
       $username = $_POST['username'];
       $password = $_POST['password'];
       if($username == "Admin" && $password == "12345") {
           $_SESSION['username'] = $username;
           header('Location: BT7_NhapThongTin.php ');
       } else {
           echo "Tên đăng nhập hoặc mật khẩu không đúng !";
       }
   }
?>