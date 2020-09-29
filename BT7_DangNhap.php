<?php

if (session_id() === ''){
    session_start();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bai tap 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formDangNhapSv">
        <form action="#" method="post">
            <input name="username" type="text" placeholder="User Name">
            <input name="password" type="password"placeholder="Password">
            <button name="submit">LOGIN</button>
        </form>
    </div>

    <?php include "BT7_XuLyDangNhap.php"; ?>
</body>
</html>
