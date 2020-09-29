
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
<?php include "validate.php"?>

    <div class="form__register">
        <h1>Đăng ký tài khoản</h1>
        <form action="#" method="post">
            Tên:
            <input type="text" name="name">
            <span class="error"><?php echo $nameErr;?></span>
            Email:
            <input type="text" name="email">
            <span class="error"><?php echo $emailErr;?></span>
            Mật khẩu:
            <input type="text" name="pass">
            <span class="error"><?php echo $passErr;?></span>
            Xác nhận mật khẩu:
            <input type="text" name="repass">
            <span class="error"><?php echo $repassErr;?></span>
            Số điện thoại:
            <input type="text" name="phone">
            <span class="error"><?php echo $phoneErr;?></span>
            Nhập địa chỉ:
            <input type="text" name="adress">
            <span class="error"><?php echo $adressErr;?></span>
            <button>TẠO TÀI KHOẢN</button>
        </form>
    </div>


</body>
</html>