<?php
session_start();
//if (isset($_SESSION['full_name'])) {
//    setcookie('full_name', $_SESSION['full_name'], time()- 1, '/');
//    unset($_SESSION['full_name']);
//}
//if (isset($_SESSION['email'])) {
//    setcookie('email', $_SESSION['email'], time()- 1, '/');
//    unset($_SESSION['email']);
//}
//if (isset($_SESSION['password'])) {
//    setcookie('password', $_SESSION['password'], time()- 1, '/');
//    unset($_SESSION['password']);
//}
session_destroy();
header('Location: sign-in.php');