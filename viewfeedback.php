<?php


$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Fetch feedback entries from the database
$selectQuery = "SELECT * FROM feedback";
$result = $conn->query($selectQuery);

// Check if there are any feedback entries
if ($result->num_rows > 0) 
{
    // Loop through the feedback entries
    while ($row = $result->fetch_assoc()) 
    {
        $feedbackId = $row['feedback_id'];
        $userName = $row['user_name'];
        $age = $row['age'];
        $gender = $row['gender'];
        $question1 = $row['question1'];

        $question2 = $row['question2'];

        $question3 = $row['question3'];

        $feedback = $row['feedback'];

        // Display the feedback entry
        echo "<div>";
        echo "<p>User Name: $userName</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>question1:$question1</p>";
        echo "<p>question2:$question2</p>";
        echo "<p>question3:$question3</p>";
        echo "<p>Feedback: $feedback</p>";

        echo "<form method='POST' action='delete_feedback.php'>";
        echo "<input type='hidden' name='feedback_id' value='$feedbackId'>";
        echo "<button type='submit'>Delete</button>";
        echo "</form>";

        echo "</div>";
    }
} 

else
 {
    echo "No feedback entries found.";
}

// Close the database connection
?>