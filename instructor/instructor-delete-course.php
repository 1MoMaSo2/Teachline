<?php
include "../include/database/connect.php";
include "include/config/aouth.php";
global $connection;

$array = array(
    'id' => $_GET['id']);

$send = $connection->prepare("DELETE FROM training_courses_mast WHERE id_training_courses_mast=?");
$send->bindValue(1, $array['id']);
$send->execute();
header('location:instructor-manage-course.php');

?>