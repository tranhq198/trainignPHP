<link rel="stylesheet" href="css/style.css">
<?php

include "functions.php";

$id = $_GET['masinhvien'];

if(!$id) {
    echo 'Không tồn tại!';
} else {?>

    <div class="logOut"><a href="logout.php">Đăng xuất</a></div>
    <div class="formNhapThongTinSv">
        <h2>Nhập thông tin sinh viên</h2>
        <form action="#" method="post">
            <input name="masinhvien" type="text" required placeholder="Mã sinh viên">
            <input name="hoten" type="text" required placeholder="Họ tên">
            <input name="namsinh" type="text" required placeholder="Năm sinh">
            <input name="quequan" type="text" required placeholder="Quê quán">
            <input name="sodienthoai" type="text" required placeholder="Số diện thoại">
            <button name="submit">Thay Đổi</button>
        </form>
    </div>
    <?php

    if (isset($_POST["submit"])) {

        $list = $_SESSION['list'];

        $masv = $_POST["masinhvien"];
        $hoten = $_POST["hoten"];
        $namsinh = $_POST["namsinh"];
        $quequan = $_POST["quequan"];
        $sodienthoai = $_POST["sodienthoai"];





//        header('Location: index.php');
    }


    ?>
<?php
}
?>


