<?php
include '../database/config.php';
include '../admin/update-webmaster.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['WMID'];

    // echo $id;

    deleteWebmasterContact($id);

    // Delete user from the database
    $sql = "DELETE FROM webmaster WHERE WMID = '$id'";
    $result = $conn->query($sql);

    if ($result == true) {
        echo "success";
    } else {
        echo "failure";
    }

}
