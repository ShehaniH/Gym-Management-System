<?php
// Assuming you have already established the database connection

include '../../database/config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the SQL statement to delete the payment method
    $query = "DELETE FROM payment_method WHERE PID = $id";

    if (mysqli_query($conn, $query)) {
       
        // echo "<script>
        // alert('Delete successfully');
        // </script>";

    } else {
        echo "Error deleting payment method: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
$conn->close();
