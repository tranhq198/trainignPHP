<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php include "ThongtinSv.php"; ?>
    <div class="container">
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
                <td><?php echo($_masv)?></td>
                <td><?php echo($_ten)?></td>
                <td><?php echo($_namsinh)?></td>
                <td><?php echo($_tuoi)?></td>
                <td><?php echo($_quequan)?></td>
                <td><?php echo($_sodt)?></td>
            </tr>
            </tbody>
        </table>
    </div>
</body>
</html>