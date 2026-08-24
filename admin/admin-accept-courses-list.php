<?php
include "../include/database/connect.php";
include "include/config/aouth.php";
include "../script/jdf/jdf.php";

global $connection;

if (isset($_GET['id'])) {

    $array = array(
        'id' => intval($_GET['id']));

    $send = $connection->prepare("UPDATE training_courses_mast SET training_courses_status_mast=? WHERE id_training_courses_mast=?");
    $send->bindValue(1, 1);
    $send->bindValue(2, $array['id']);

    if ($send->execute()) {
        header("Location: admin-waiting-courses-list.php");
}
}
?>