<?php

    // Retrieve form data
    $Fid = $_POST['ID'];
    $Ftitle = $_POST['title'];
    $Fmessage = $_POST['message'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "online_fitnes_trainer";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
    // Construct the SQL query
    $sql = "INSERT INTO Announcement (annID,annTitle,annMessage) VALUES ('$Fid', '$Ftitle','$Fmessage')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {  
        echo "Successfully added!"."<br>";
        echo "<br>"."<button type='button' style='background-color: green; color: white; padding: 10px 20px; border: none; border-radius: 4px;'><a href='postann.php'>back to home</a></button>";
    echo "Data inserted successfully.";
    }else {
        echo "Error While adding data";
        echo "<br>"."<button type='button' style='background-color: red; color: white; padding: 10px 20px; border: none; border-radius: 4px;'><a href='postann.php'>back to home</a></button>";
    }

    // Close the database connection
    $conn->close();
?>