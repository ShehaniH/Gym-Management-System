<?php
function getWebNewWasterID()
{
    $sql1 = "SELECT WMID FROM  webmaster ORDER BY  WMID DESC LIMIT 1;";

    include '../database/config.php';

    $result = $conn->query($sql1);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $data = $row['WMID'];
    } else {
        $data = ""; // If no data is found, set an empty value
    }

    echo $data + 1;

    $conn->close();
}

function addContact($webmasterId, $contact){
    include '../database/config.php';

    $sql = "INSERT INTO webmaster_contact VALUES ('$webmasterId','$contact')";


    if ($conn->query($sql) === TRUE) {
        // Update successful
        // echo "update sucessfull.";
    } else {
        // Error updating the data
        echo "Error delete  webmaster contact data: " . $conn->error;
    }

    $conn->close();
}

if (isset($_POST['submit-btn'])) {
    // echo "button click";


    // get data fom form
    $webmaster_id = $_POST['webmasterId'];
    $webmaster_name = $_POST['name'];
    $webmaster_email = $_POST['email'];
    $webmaster_address = $_POST['address'];
    $webmaster_accessLevel = $_POST['accessLevel'];
    $webmaster_password = $_POST['password'];
    $contact1 = $_POST['contact1'];
    $contact2 = $_POST['contact2'];

    $sql1 = "INSERT INTO 
            webmaster (WMID, name, email, address, access_level, password) 
            VALUES ('$webmaster_id', '$webmaster_name', '$webmaster_email', '$webmaster_address', '$webmaster_accessLevel', '$webmaster_password')";

    include '../database/config.php';

    $result = $conn->query($sql1);

    if ($result === TRUE) {
        // echo "Add user successfully.";
        echo "<script>alert('Add user successfully.'); window.location.href = window.location.href;</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();

    if(!($contact1 == null && $contact2 ==null)){
        if($contact2 == null){
            addContact($webmaster_id, $contact1);
        }else if($contact1 == null){
            addContact($webmaster_id, $contact2);
        }else{
            addContact($webmaster_id, $contact1);
            addContact($webmaster_id, $contact2);
        }
    }
    
} else {
    // echo "button not click";
}

?>