<?php
// Assuming you have already established a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_fitnes_trainer";

// Retrieve form data
$rowId = $_POST['itemno'];

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the SQL statement to remove the row
    $stmt = $conn->prepare("DELETE FROM item WHERE INO = ?");
    $stmt->execute([$rowId]);

    echo "Item removed successfully";
    echo "<br>"."<button type='button' style='background-color: green; color: white; padding: 10px 20px; border: none; border-radius: 4px;'><a href='manageshop.php'>back to home</a></button>";
} catch(PDOException $e) {
    echo "item removal failed: " . $e->getMessage();
    echo "<br>"."<button type='button' style='background-color: red; color: white; padding: 10px 20px; border: none; border-radius: 4px;'><a href='manageshop.php'>back to home</a></button>";
    
}

$conn = null;
?>
