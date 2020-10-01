<?php
   if (isset($_POST['submit'])) {
       $username = $_POST['username'];
       $password = $_POST['password'];
       if($username == "admin" && $password == "12345") {
           echo ("Logged in successfully");
       } else {
           echo ("Username or password is wrong");
       }
   }