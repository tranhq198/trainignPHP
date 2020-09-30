<?php
    $danhSachQuanHuyenHaNoi = array(
        array(
            "Code" => "001",
            "Type" => "Quan",
            "Name" => "Quận Ba Đình"
        ),
        array(
            "Code" => "002",
            "Type" => "Quan",
            "Name" => "Quận Hoàn Kiếm"
        ),
        array(
            "Code" => "003",
            "Type" => "Quan",
            "Name" => "Quận Tây Hồ"
        ),
        array(
            "Code" => "004",
            "Type" => "Quan",
            "Name" => "Quận Long Biên"
        ),
        array(
            "Code" => "005",
            "Type" => "Quan",
            "Name" => "Quận Cầu Giấy"
        ),
        array(
            "Code" => "006",
            "Type" => "Quan",
            "Name" => "Quận Đống Đa"
        ),
        array(
            "Code" => "007",
            "Type" => "Quan",
            "Name" => "Quận Hai Bà Trưng"
        ),
        array(
            "Code" => "008",
            "Type" => "Quan",
            "Name" => "Quận Hoàng Mai"
        ),
        array(
            "Code" => "009",
            "Type" => "Quan",
            "Name" => "Quận Thanh Xuân"
        ),
        array(
            "Code" => "016",
            "Type" => "Huyen",
            "Name" => "Huyện Sóc Sơn"
        ),
        array(
            "Code" => "017",
            "Type" => "Huyen",
            "Name" => "Huyện Đông Anh"
        ),
        array(
            "Code" => "018",
            "Type" => "Huyen",
            "Name" => "Huyện Gia Lâm"
        )
    )

?>

<table border="1px">
    <thead>
    <tr>
        <th>Code</th>
        <th>Type</th>
        <th>Name</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $soLuongQuanHuyen = count($danhSachQuanHuyenHaNoi);
    for($i = 0; $i < $soLuongQuanHuyen; $i++ ){
    ?>
        <tr style="text-align: center">
            <td>
                <?php echo($danhSachQuanHuyenHaNoi[$i]['Code']); ?>
            </td>

            <td>
                <?php echo($danhSachQuanHuyenHaNoi[$i]['Type']) ?>
            </td>
        <?php
        if ($danhSachQuanHuyenHaNoi[$i]['Type'] === "Quan") {
        ?>
            <td style="color: #3551ff; font-weight: bold;">
                <?php echo($danhSachQuanHuyenHaNoi[$i]['Name']) ?>
            </td>
        <?php
        }if ($danhSachQuanHuyenHaNoi[$i]['Type'] === "Huyen") {
        ?>
            <td style="color: #16180f; font-weight: bold; font-style: italic;">
                <?php echo($danhSachQuanHuyenHaNoi[$i]['Name']) ?>
            </td>
        <?php
        }
    }
    ?>
        </tr>
    </tbody>
</table>
