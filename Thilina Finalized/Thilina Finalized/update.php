<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_fitnes_trainer";

$itmcode = $_POST['itmcode'];
$new_price = $_POST['newprice'];
$units = $_POST['newa'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE item SET price = '$new_price', stock = '$units' WHERE INO = '$itmcode'";
    $conn->exec($sql);
    echo "Update successful";
    echo "<br>"."<button type='button' style='background-color: green; color: white; padding: 10px 20px; border: none; border-radius: 4px;'><a href='manageshop.php'>back to home</a></button>";
} catch(PDOException $e) {
    echo "Update failed: " . $e->getMessage();
    echo "<br>"."<button type='button' style='background-color: red; color: white; padding: 10px 20px; border: none; border-radius: 4px;'><a href='manageshop.php'>back to home</a></button>";
}

$conn = null;

    
?>


