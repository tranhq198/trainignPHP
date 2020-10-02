<?php
require 'functions.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--    Kiem tra xem user da login chua   -->
<!--   Neu roi thi shows thong tin sinh vien   -->
<!--    Neu chua thi bat quay ve trang dang nhap   -->
<?php
if(checkLogin()){
?>

    <h3><?php echo $_SESSION['username'];?>  Đăng nhập thành công!</h3>
    <div class="logOut"><a href="logout.php">Đăng xuất</a></div>
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
        $masv = $_POST["masinhvien"];
        $ten = $_POST["hoten"];
        $namsinh = $_POST["namsinh"];
        $quequan = $_POST["quequan"];
        $sodt = $_POST["sodienthoai"];
        $tuoi = date('Y') - $namsinh;


        if(isset($_SESSION['list'])) {
            $list = $_SESSION['list'];
        } else {
            $list = [];
        }

        $list[] = [
            'masinhvien' => $masv,
            'ten'        => $ten,
            'namsinh'    => $namsinh,
            'tuoi'       => $tuoi,
            'quequan'    => $quequan,
            'sodienthoai'=> $sodt
        ];
        $_SESSION['list'] = $list;
    }
    ?>
    <div class="container">
        <h1>Quản Lí Thông Tin Sinh Viên</h1>
        <table border="1">
            <thead>
            <tr>
                <td>STT</td>
                <td>Mã SV</td>
                <td>Họ tên</td>
                <td>Năm sinh</td>
                <td>Tuổi</td>
                <td>Số điện thoại</td>
                <td>Quê quán</td>
                <td colspan="2">Edit</td>
            </tr>
            </thead>
            <tbody>
            <?php
            if(!empty($_SESSION['list'])) {
                $list = $_SESSION['list'];
                foreach ($list as $key => $value ) {
                    ?>
                    <tr>
                        <td><?php echo($key + 1); ?></td>
                        <td><?php echo($value['masinhvien']); ?></td>
                        <td><?php echo($value['ten']); ?></td>
                        <td><?php echo($value['namsinh']); ?></td>
                        <td><?php echo($value['tuoi']); ?></td>
                        <td><?php echo($value['sodienthoai']); ?></td>
                        <td><?php echo($value['quequan']); ?></td>
                        <td><a href="edit.php?masinhvien=<?php echo $value['masinhvien']; ?>">Sửa</a></td>
                        <td><a href="edit.php">Xóa</a></td>
                    </tr>
                    <?php
                }
            }?>
            </tbody>
        </table>
    </div>

<?php
} else {
    include "login.php";
}
?>
</body>
</html>