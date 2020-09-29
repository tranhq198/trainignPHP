<?php
if(isset($_POST['submit'])) {
    $username = $_POST["name"];
    $password = $_POST["pass"];
    $email = $_POST["email"];
    $repass = $_POST['repass'];
    $phone = $_POST["phone"];
    $adress = $_POST["adress"];
    if(preg_match("/w{2,30}/",$username) == false ) {
        $nameErr = "Name is required";
    } else {
        echo ($username);
    }
    if(preg_match("^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$", $email) == false) {
        $emailErr = "Email is required";
    } else {
        echo ($email);
    }
    if(preg_match("^(?=.*[w])(?=.*\d)[w\d]{4,}$", $password) == false){
        $passErr = "Email is required";
    } else {
        echo ($password);
    }
    if($repass != $password){
        $repassErr = "Email is required";
    } else {
        echo ($repass);
    }
    if(preg_match("/d{8,12}", $phone) == false) {
        $phoneErr = "Email is required";
    } else {
        echo ($phone);
    }
    if(preg_match("/d{5,120}", $adress) == false) {
        $adressErr = "Email is required";
    } else {
        echo ($adress);
    }
}