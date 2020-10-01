<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (checkUser($username, $password)) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
    } else {
        echo "Tên đăng nhập hoặc mật khẩu không đúng !";
    }
}

