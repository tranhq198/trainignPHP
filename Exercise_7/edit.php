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

        $masvUpdate = $_POST["masinhvien"];
        $tenUpdate = $_POST["hoten"];
        $namsinhUpdate = $_POST["namsinh"];
        $quequanUpdate = $_POST["quequan"];
        $sodtUpdate = $_POST["sodienthoai"];
        $tuoiUpdate = date('Y') - $namsinhUpdate;

        if (isset($_SESSION['newlist'])) {
            $newlist = $_SESSION['newlist'];
        } else {
            $newlist = [];
        }

        $newlist [] = [
            'masinhvien' => $masvUpdate,
            'ten'        => $tenUpdate,
            'namsinh'    => $namsinhUpdate,
            'tuoi'       => $tuoiUpdate,
            'quequan'    => $quequanUpdate,
            'sodienthoai'=> $sodtUpdate
        ];
        $list = $_SESSION['list'];
        foreach ($newlist as $key => $newvalue) {
            if (!isset($id)){
                $_SESSION['list'] = $newlist;
                header('Location: index.php');
            }
        }
    }

    ?>
<?php
}
?>


