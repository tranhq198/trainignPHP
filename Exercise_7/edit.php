<?php

include "functions.php";

$id = $_GET['id'];

$sv = $_SESSION['list'][$id] ?? false;

if(!$sv) {
    echo 'Student not found!';
}

print_r($sv);
