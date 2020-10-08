<?php
$id = $_GET['masinhvien'];

$list = $_SESSION['list'];
foreach ($list as $key => $value) {
    if($value['masinhvien'] == $id) {
        unset($list[$key]);
    }
}
$list = $_SESSION['list'];
header('Location: home.php');