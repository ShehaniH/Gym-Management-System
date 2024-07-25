<?php

$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $faqid = $_POST['faq_id'];
   

    // Perform the delete operation

    $sqls = "DELETE FROM faq where faq_id=$faqid";

    if ($conn->query($sqls) === TRUE) 
    {
        // Feedback data deleted successfully
        echo "faq deleted!";
    }

    else 
    {
        // Error occurred while deleting data
        echo "Error: " . $sqls . "<br>" . $conn->error;
    }


}









?>