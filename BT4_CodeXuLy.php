<?php
if(isset($_POST['submit'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Bạn chưa nhập tên";
    } else {
        $username = $_POST["username"];
        if(preg_match("/w{2,30}/",$username) == false ){
            $error['username'] = "Tên không đúng định dạng";
        }
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Bạn chưa nhập mật khẩu";
    } else {
        $password = $_POST["password"];
        if(preg_match("^(?=.*[w])(?=.*\d)[w\d]{4,}$", $password) == false){
            $error['password'] = "Mật khẩu không đúng định dạng";
        }
    }

    if (empty($_POST['repass'])) {
        $error['repass'] = "Mật khẩu không khớp";
    } else {
        $repass = $_POST["repass"];
        if($repass != $password) {
            $error['repass'] = "Mật khẩu không khớp";
        }
    }

    if (empty($_POST['email'])) {
        $error['email'] = "Bạn chưa nhập email";
    } else {
        $email = $_POST["email"];
        if(preg_match("^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$", $email) == false){
            $error['email'] = "Email không đúng định dạng";
        }
    }

    if (empty($_POST['phone'])) {
        $error['phone'] = "Bạn chưa nhập số điện thoại";
    } else {
        $phone = $_POST["phone"];
        if(preg_match("/d{8,12}", $phone) == false){
            $error['phone'] = "Số điện thoại không đúng định dạng";
        }
    }

    if (empty($_POST['adress'])) {
        $error['adress'] = "Bạn chưa nhập địa chỉ";
    } else {
        $adress = $_POST["adress"];
        if(preg_match("/d{5,120}", $adress) == false){
            $error['adress'] = "Địa chỉ khộng đúng định dạng";
        }

    }


    if(empty($error)){
        echo "{$username} <br>
               {$password} <br>
                {$email} <br>
                 {$phone} <br>
                  {$adress}";
    }
}
?>



