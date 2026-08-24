<?php
if(!isset($_SESSION['email_admin'])){
    header("location:admin-sign-in.php");
}