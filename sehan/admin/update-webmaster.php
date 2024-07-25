<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Retrieve the form data
    $webmasterId = $_POST['webmasterId'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $accessLevel = $_POST['accessLevel'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $contact1 = $_POST['contact1'];
    $contact2 = $_POST['contact2'];

    updateWebmasterTable($webmasterId, $name, $email, $address, $accessLevel, $password, $confirmPassword, $contact1, $contact2);
    deleteWebmasterContact($webmasterId, $contact1, $contact2);

    if(!($contact1 == null && $contact2 ==null)){
        if($contact2 == null){
            updateWebmasterContac($webmasterId, $contact1);
        }else if($contact1 == null){
            updateWebmasterContac($webmasterId, $contact2);
        }else{
            updateWebmasterContac($webmasterId, $contact1);
            updateWebmasterContac($webmasterId, $contact2);
        }
    }
}

function updateWebmasterContac($webmasterId, $contact){
    include '../database/config.php';

    $sql = "INSERT INTO webmaster_contact VALUES ('$webmasterId','$contact')";


    if ($conn->query($sql) === TRUE) {
        // echo "add sucessfull.";
    } else {
        // Error updating the data
        echo "Error add contact no " . $conn->error;
    }

    $conn->close();
}

function updateWebmasterTable($webmasterId, $name, $email, $address, $accessLevel, $password, $confirmPassword, $contact1, $contact2)
{
    include '../database/config.php';

    $sql = "UPDATE webmaster SET name = '$name', email = '$email', address = '$address', access_level = '$accessLevel', password = '$confirmPassword' WHERE WMID = '$webmasterId';";


    if ($conn->query($sql) === TRUE) {
        // Update successful
        // echo "Webmaster data updated successfully.";
        echo "<script>alert('Webmaster data updated successfully.'); window.location.href = window.location.href;</script>";
    } else {
        // Error updating the data
        echo "Error updating webmaster data: " . $conn->error;
    }

    $conn->close();
}

function deleteWebmasterContact($webmasterId)
{
    include '../database/config.php';
    $sql = "DELETE FROM webmaster_contact WHERE WMID = '$webmasterId'";
    // $sql2 = "UPDATE webmaster SET name = '$name', email = '$email', address = '$address', access_level = '$accessLevel', password = '$confirmPassword' WHERE WMID = '$webmasterId';";


    if ($conn->query($sql) === TRUE) {
        // delete successful
        echo "delete sucessfull.";
        // echo "<script>alert('Webmaster data updated successfully.'); window.location.href = window.location.href;</script>";
    } else {
        // Error delete the data
        echo "Error delete  webmaster contact data: " . $conn->error;
    }

    $conn->close();
}
