<?php
    session_start();

var_dump($_SESSION['username']);

    if (!isset($_SESSION['username'])) {

	     header('Location: BT7_DangNhap.php');
    }
?>
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

    <h3><?php echo $_SESSION['username'];  ?> đã đăng nhập thành công! <br> Hãy điền thông tin vào form sau:</h3>
    <div class="formNhapThongTinSv">
        <h2>Nhập thông tin sinh viên</h2>
        <form action="#" method="post">
            <input name="masinhvien" type="text" required placeholder="Mã sinh viên">
            <input name="hoten" type="text" required placeholder="Họ tên">
            <input name="namsinh" type="text" required placeholder="Năm sinh">
            <input name="quequan" type="text" required placeholder="Quê quán">
            <input name="sodienthoai" type="text" required placeholder="Số diện thoại">
            <button name="submit">LƯU</button>
        </form>
    </div>

    <?php
    if (isset($_POST["submit"])) {
        $_masv = $_POST["masinhvien"];
        $_ten = $_POST["hoten"];
        $_namsinh = $_POST["namsinh"];
        $_quequan = $_POST["quequan"];
        $_sodt = $_POST["sodienthoai"];
        $_tuoi = date(Y) - $_namsinh;

        $_SESSION["masinhvien"] = $_masv;
        $_SESSION["ten"] = $_ten;
        $_SESSION["namsinh"] = $_namsinh;
        $_SESSION["sodt"] = $_sodt;
        $_SESSION["tuoi"] = $_tuoi;
        $_SESSION["quequan"] = $_quequan;
        header('Location: BT7_QuanLy.php');
    }
    ?>


</body>
</html>