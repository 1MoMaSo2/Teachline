<?php
session_start();
//if (isset($_SESSION['full_name_teacher'])) {
//    setcookie('full_name_teacher', $_SESSION['full_name_teacher'], time()- 1, '/');
//    unset($_SESSION['full_name_teacher']);
//}
//if (isset($_SESSION['email_teacher'])) {
//    setcookie('email', $_SESSION['email_teacher'], time()- 1, '/');
//    unset($_SESSION['email_teacher']);
//}
//if (isset($_SESSION['password_teacher'])) {
//    setcookie('password', $_SESSION['password_teacher'], time()- 1, '/');
//    unset($_SESSION['password_teacher']);
//}
session_destroy();
header('Location: instructor-sign-in.php');