
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "BT4_CodeXuLy.php"?>

    <div class="form__register">
        <h1>Đăng ký tài khoản</h1>
        <form action="#" method="post">
            Tên:
            <input type="text" name="username">
            <?php if (isset($error['username'])) { ?>
                <span style="color: red;"><?php echo $error['username']; ?></span>
            <?php } ?>
            Email:
            <input type="text" name="email">
            <?php if (isset($error['email'])) { ?>
                <span style="color: red;"><?php echo $error['email']; ?></span>
            <?php } ?>
            Mật khẩu:
            <input type="text" name="password">
            <?php if (isset($error['password'])) { ?>
                <span style="color: red;"><?php echo $error['password']; ?></span>
            <?php } ?>
            Xác nhận mật khẩu:
            <input type="text" name="repass">
            <?php if (isset($error['repass'])) { ?>
                <span style="color: red;"><?php echo $error['repass']; ?></span>
            <?php } ?>
            Số điện thoại:
            <input type="text" name="phone">
            <?php if (isset($error['phone'])) { ?>
                <span style="color: red;"><?php echo $error['phone']; ?></span>
            <?php } ?>
            Nhập địa chỉ:
            <input type="text" name="adress">
            <?php if (isset($error['adress'])) { ?>
                <span style="color: red;"><?php echo $error['adress']; ?></span>
            <?php } ?>
            <button>TẠO TÀI KHOẢN</button>
        </form>
    </div>


</body>
</html>