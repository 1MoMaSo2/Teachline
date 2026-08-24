<?php
if(!isset($_SESSION['email_teacher'])){
    header("location:instructor-sign-in.php");
}