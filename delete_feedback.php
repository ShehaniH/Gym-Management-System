<?php


$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $feedbackId = $_POST['feedback_id'];
   

    // Perform the delete operation

    $sqls = "DELETE FROM feedback where feedback_id=$feedbackId";

    if ($conn->query($sqls) === TRUE) 
    {
        // Feedback data deleted successfully
        echo "Feedback deleted!";
    }

    else 
    {
        // Error occurred while deleting data
        echo "Error: " . $sqls . "<br>" . $conn->error;
    }

}


?>