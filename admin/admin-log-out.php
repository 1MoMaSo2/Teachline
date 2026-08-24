<?php
session_start();
session_destroy();
header('Location: admin-sign-in.php');