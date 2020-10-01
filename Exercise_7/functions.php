<?php

session_start();

function checkLogin(){
    if(isset($_SESSION['username'])){
        return true;
    }
    return false;
}

function checkUser($username,$password){
    if($username === "Admin" && $password === "12345" ){
        return true;
    }
    return false;
}

function validateUser($username, $password){
    $checkUsername = preg_match("/^[\w]+(?:[ _-][\w]+)*$/",$username);
    $checkPassword = preg_match("/^(?=.*[\w])(?=.*\d)[\w\d]{4,}$/", $password);
    if($checkUsername && $checkPassword ){
        return true;
    }
    return false;
}


