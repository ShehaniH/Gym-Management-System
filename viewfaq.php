<?php


$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

$selectQuery = "SELECT * FROM faq";
$result = $conn->query($selectQuery);

if ($result->num_rows > 0) 
{
    // Loop through the feedback entries
    while ($row = $result->fetch_assoc()) 
    {

        $faqid=$row['faq_id'];
        $question=$row['question'];


        echo"<div>";
        echo "<p> faq_id: $faqid </p>";
        echo "<p> question: $question </p>";


        echo "<form method='POST' action='deletefaq.php'>";
        echo "<input type='hidden' name='faq_id' value='$faqid'>";
        echo "<button type='submit'>Delete</button>";
        echo "</form>";


        echo "<form method='POST' action='updatefaq.php'>";
        echo "<input type='hidden' name='faq_id' value='$faqid'>";
        echo "<button type='submit'>Update</button>";
        echo "</form>";

        echo "</div>";

    }

}


else
 {
    echo "No faq entries found.";
}




?>