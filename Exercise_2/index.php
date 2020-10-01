<?php
$danhsachnhanvien = array(
    array(
        'name' => "Shouta Yamamoto",
        'site' => 'kaiyouit.com',
        'position' => 'founder',
    ),
    array(
        'name' => 'Nguyễn Huy Hùng',
        'site' => 'kaiyouit.com',
        'position' => 'founder'
    ),
    array(
        'name' => 'Nguyễn Hữu Long',
        'site' => 'kaiyouit.com',
        'position' => 'PM'
    ),
    array(
        'name' => 'Đỗ Như Tuấn',
        'site' => 'kaiyouit.com',
        'position' => 'leader'
    ),
    array(
        'name' => 'Nguyễn Văn A',
        'site' => 'kaiyouit.com',
        'position' => 'leader'
    ),
    array(
        'name' => 'Nguyễn Văn B',
        'site' => 'kaiyouit.com',
        'position' => 'leader'
    ),
    array(
        'name' => 'Nguyễn Văn C',
        'site' => 'kaiyouit.com',
        'position' => 'leader'
    ),
    array(
        'name' => 'Nguyễn Văn D',
        'site' => 'kaiyouit.com',
        'position' => 'leader'
    ),
    array(
        'name' => 'Nguyễn Văn E',
        'site' => 'kaiyouit.com',
        'position' => 'leader'
    ),
    array(
        'name' => 'Nguyễn Văn F',
        'site' => 'kaiyouit.com',
        'position' => 'leader'
    ),
    array(
        'name' => 'Nguyễn Văn G',
        'site' => 'kaiyouit.com',
        'position' => 'leader'
    )
)
?>

<table border="1px">
    <thead>
    <tr>
        <th>Name</th>
        <th>Site</th>
        <th>Position</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $soluongnv = count($danhsachnhanvien);
    for($i = 0; $i < $soluongnv; $i++ ){
        if($i % 2 != 0 && $i < 10) {
            ?>
            <tr>
                <td>
                    <?php echo($danhsachnhanvien[$i]['name']) ?>
                </td>
                <td>
                    <?php echo($danhsachnhanvien[$i]['site']) ?>
                </td>
                <td>
                    <?php echo($danhsachnhanvien[$i]['position']) ?>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
<br />
<!--    foreach   -->
<table border="1px">
    <thead>
    <tr>
        <th>Name</th>
        <th>Site</th>
        <th>Position</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $i = 0;
    foreach ($danhsachnhanvien as $nhanvien) {
        if ($i++ % 2 != 0 && $i <= 10) {

            ?>
            <tr>
                <td>
                    <?php echo($nhanvien['name']) ?>
                </td>
                <td>
                    <?php echo($nhanvien['site']) ?>
                </td>
                <td>
                    <?php echo($nhanvien['position']) ?>
                </td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
<br>
<!--  do while  -->
<table border="1px">
    <thead>
    <tr>
        <th>Name</th>
        <th>Site</th>
        <th>Position</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $soluongnv = count($danhsachnhanvien);
    $i = 0;
    do{
        if ($i % 2 != 0 && $i < 10) {
            ?>
            <tr>
                <td>
                    <?php echo($danhsachnhanvien[$i]['name']) ?>
                </td>
                <td>
                    <?php echo($danhsachnhanvien[$i]['site']) ?>
                </td>
                <td>
                    <?php echo($danhsachnhanvien[$i]['position']) ?>
                </td>
            </tr>
            <?php
        }
        $i ++;
    }while ($i < $soluongnv )
    ?>
    </tbody>
</table>