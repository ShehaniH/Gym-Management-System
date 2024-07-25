<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_fitnes_trainer";

// Retrieve form data
$itemcode = $_POST['itemno'];
$itemname = $_POST['itemname'];
$description = $_POST['description'];
$category = $_POST['cat'];
$star = $_POST['star'];
$price = $_POST['price'];
$stock = $_POST['avstock'];

try {
    // Create a new PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare and execute the SQL statement to insert a new row
    $stmt = $conn->prepare("INSERT INTO item (INO,name,description,category,rate,price,stock) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$itemcode,$itemname,$description,$category,$star,$price,$stock]);

    echo "Item added successfully";
    echo "<br>"."<button type='button' style='background-color: green; color: white; padding: 10px 20px; border: none; border-radius: 4px;'><a href='manageshop.php'>back to home</a></button>";
} catch(PDOException $e) {
    echo "Item addition failed: " . $e->getMessage();
    echo "<br>"."<button type='button' style='background-color: red; color: white; padding: 10px 20px; border: none; border-radius: 4px;'><a href='manageshop.php'>back to home</a></button>";
    
}

$conn = null;
?>
