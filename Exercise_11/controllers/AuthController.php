<?php

require 'model/Student.php';

class AuthController
{

    private  $model;

    function __construct()
    {
        $this->model = new Student();
    }

    function register() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'] ?? null;
            $password = $_POST['password'] ?? null;

            if($username && $password) {
                $res = $this->model->insert($username, $password);
                if($res) {
                    $_SESSION['current_user'] = $username;
                    redirect('/');
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
                $res = $this->model->login($username, $password);
                if($res) {
                    $_SESSION['current_user'] = $username;
                    redirect('views/home');
                }
            }
        }
    }
}