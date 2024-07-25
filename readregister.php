<!DOCTYPE html>
<html>
<head>
    <title>User Registration CRUD</title>
</head>
<body>
    <h2>User Registration CRUD</h2>
    <a href="registerIsset.php">Add New User</a>
    <br><br>

    <?php
    // Database connection settings
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="online_fitnes_trainer";

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve all user records from the database
    $sql = "SELECT * FROM register";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>  <th>full Name</th> <th>nic</th> <th>date</th> <th>email </th> <th>gender </th> <th>user_name </th> <th>password_ </th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['NIC'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['user_name'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
           
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No users found.";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
