
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

    <div class="form__register">
        <h1>Đăng ký tài khoản</h1>
        <form action="#" method="post">
            Tên:
            <input type="text" name="name">
            Email:
            <input type="text" name="email">
            Mật khẩu:
            <input type="text" name="pass">
            Xác nhận mật khẩu:
            <input type="text" name="repass">
            Số điện thoại:
            <input type="text" name="phone">
            Nhập địa chỉ:
            <input type="text" name="adress">
            <button>TẠO TÀI KHOẢN</button>
        </form>
    </div>
    <?php include "validate.php"?>

</body>
</html>