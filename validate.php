<?php
if(isset($_POST['submit'])) {
    $username = $_POST["name"];
    $password = $_POST["pass"];
    $email = $_POST["email"];
    $repass = $_POST['repass'];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];
    if(preg_match("/w{2,30}/",$username) == false ) {
        echo ("sai tên");
    } else {
        echo ($username);
    }
    if(preg_match("^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$", $email) == false) {
        echo ("sai email");
    } else {
        echo ($email);
    }
    if(preg_match("^(?=.*[w])(?=.*\d)[w\d]{4,}$", $password) == false){
        echo ("sai pass");
    } else {
        echo ($password);
    }
    if($repass != $password){
        echo ("pass không khớp");
    } else {
        echo ($repass);
    }
    if(preg_match("/d{8,12}", $phone) == false) {
        echo ("sai số dt");
    } else {
        echo ($phone);
    }
    if(preg_match("/d{5,120}", $adress) == false) {
        echo ("địa chỉ không đúng");
    } else {
        echo ($adress);
    }
}