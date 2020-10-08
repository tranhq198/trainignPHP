<?php

$ac = '';

class Student
{
    private $conn;

    function __construct()
    {
        global $conn;
        $this->conn = $conn;
    }

    function insert($username, $password) {
        $sql = "INSERT INTO users(username, password) VALUES ('$username','$password')";
        $res = mysqli_query($this->conn, $sql);

        return $res == 1;
    }

    function login($username, $password) {
        $sql = "select * from users where username = '$username' and password = '$password' ";
        $res = mysqli_query($this->conn, $sql);
        $num_rows = mysqli_num_rows($res);

        return $num_rows == 1;
    }

}