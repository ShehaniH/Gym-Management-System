<?php


$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

/*
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    // Get the FAQ ID and question from the form
    $faqid = $row['faq_id'];
    $question = $row['question'];

    $sql = $mysqli->prepare("UPDATE faq SET question = ? WHERE faq_id = ?");
    $result = $mysqli->query($sql);

    if ($result) {
        // Redirect to the view FAQ page or display a success message
        header('Location: viewfaq.php');
        exit;
    } else {
        // Display an error message
        echo "Error updating FAQ: " . $mysqli->error;
    }

    // Close the database connection
    $mysqli->close();
}
?>
*/




$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Get the faq_id and question from the user
$faq_id = $_POST['faq_id'];
$question = $_POST['question'];

// Prepare the SQL statement
$stmt = $conn->prepare('UPDATE faq SET question = :question WHERE faq_id = :faq_id');

// Bind the parameters
$stmt->bindParam(':question', $question);
$stmt->bindParam(':faq_id', $faq_id);

// Execute the SQL statement
$stmt->execute();

// Check if the update was successful
if ($stmt->rowCount() > 0) {
  // The update was successful
  echo 'The FAQ was updated successfully.';
} else {
  // The update was not successful
  echo 'The FAQ was not updated.';
}

// Close the database connection
$conn = null;

?>


