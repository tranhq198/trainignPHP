<?php

include "model/functions.php";

class AuthController
{

    private  $model;

    function __construct()
    {
        $this->model = new functions();
    }

    function register() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'] ?? null;
            $password = $_POST['password'] ?? null;

            if($username && $password) {
                $res = $this->model->insert($username, $password);
                if($res) {
                    $_SESSION['current_user'] = $username;
                    redirect('views/home');
                }
            }
            $errors['register'] = 'Error when register!';
        }
        require 'views/register.php';
    }

    function login() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'] ?? null;
            $password = $_POST['password'] ?? null;

            if ($username && $password) {
                $res = $this->model->getData($username,$password);
                if($res) {
                    $_SESSION['current_user'] = $username;
                    redirect('views/home');
                }
            }
            $errors['login'] = 'Error when login!';
        }
        if (!isset($_SESSION['current_user'])) {
            require 'views/register.php';
        } else {
            require 'views/login.php';
        }

    }
}