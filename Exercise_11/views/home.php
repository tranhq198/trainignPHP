<?php require 'parts/footer.php'?>

<h3> Đăng nhập thành công!</h3>
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

<?php require 'parts/footer.php'?>
