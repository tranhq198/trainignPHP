<?php
session_start();

function checkLogin(){
    return isset($_SESSION['current_user']);
}

function redirect($url) {
    header("location: /Exercise_11$url");
    die();
}