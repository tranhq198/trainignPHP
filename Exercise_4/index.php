
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/stylebt4.css">
</head>
<body>
<?php include "backend.php"?>

    <div class="form__register">
        <h1>Đăng ký tài khoản</h1>
        <form action="#" method="post">
            <p>Tên:</p>
            <input type="text" name="username">
            <?php if (isset($error['username'])) { ?>
                <span style="color: red;"><?php echo $error['username']; ?></span>
            <?php } ?>
            <p>Email:</p>
            <input type="text" name="email">
            <?php if (isset($error['email'])) { ?>
                <span style="color: red;"><?php echo $error['email']; ?></span>
            <?php } ?>
            <p>Mật khẩu:</p>
            <input type="password" name="password">
            <?php if (isset($error['password'])) { ?>
                <span style="color: red;"><?php echo $error['password']; ?></span>
            <?php } ?>
            <p>Xác nhận mật khẩu:</p>
            <input type="password" name="repass">
            <?php if (isset($error['repass'])) { ?>
                <span style="color: red;"><?php echo $error['repass']; ?></span>
            <?php } ?>
            <P>Số điện thoại:</P>
            <input type="number" name="phone">
            <?php if (isset($error['phone'])) { ?>
                <span style="color: red;"><?php echo $error['phone']; ?></span>
            <?php } ?>
            <P>Nhập địa chỉ:</P>
            <input type="text" name="adress">
            <?php if (isset($error['adress'])) { ?>
                <span style="color: red;"><?php echo $error['adress']; ?></span>
            <?php } ?>
            <button name="submit" >TẠO TÀI KHOẢN</button>
        </form>
    </div>


</body>
</html>