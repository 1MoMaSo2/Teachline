<?php
include "../include/database/connect.php";
include "include/config/aouth.php";
include "../script/jdf/jdf.php";

global $connection;

if (isset($_GET['id'])) {

    $array = array(
        'id' => intval($_GET['id']));

    $send = $connection->prepare("UPDATE teacher_mast SET teacher_status_mast=? WHERE id_teacher_mast=?");
    $send->bindValue(1, 1);
    $send->bindValue(2, $array['id']);

    if ($send->execute()) {
        header("Location: admin-waiting-instructors-list.php");
}
}
?>