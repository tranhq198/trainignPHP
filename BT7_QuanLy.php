<?php

if (session_id() === ''){
    session_start();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="BT7.css">
</head>
<body>


    <div class="container">
        <h1>Quản Lí Thông Tin Sinh Viên</h1>
        <table border="1">
            <thead>
            <tr>
                <td>STT</td>
                <td>Mã Sinh Viên</td>
                <td>Họ tên</td>
                <td>Năm sinh</td>
                <td>Tuổi</td>
                <td>Số điện thoại</td>
                <td>Quê quán</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>01</td>
                <td><?php echo $_SESSION["masinhvien"] ?></td>
                <td><?php echo $_SESSION["ten"] ?></td>
                <td><?php echo $_SESSION["namsinh"] ?></td>
                <td><?php echo $_SESSION["tuoi"] ?></td>
                <td><?php echo $_SESSION["sodt"] ?></td>
                <td><?php echo $_SESSION["quequan"] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>