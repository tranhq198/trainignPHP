<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông Tin Sinh Viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="formNhapThongTinSv">
        <form action="#" method="post">
            <input name="masinhvien" type="text" placeholder="Mã sinh viên">
            <input name="hoten" type="text" placeholder="Họ tên">
            <input name="namsinh" type="text" placeholder="Năm sinh">
            <input name="quequan" type="text" placeholder="Quê quán">
            <input name="sodienthoai" type="text" placeholder="Số diện thoại">
            <button name="submit">LƯU</button>
        </form>
    </div>

    <?php
    if (isset($_POST["submit"])) {
        $_masv = $_POST["masinhvien"];
        $_ten = $_POST["masinhvien"];
        $_namsinh = $_POST["masinhvien"];
        $_quequan = $_POST["masinhvien"];
        $_sodt = $_POST["masinhvien"];
        $_tuoi = date(Y) - $_namsinh;
    }
    ?>


</body>
</html>