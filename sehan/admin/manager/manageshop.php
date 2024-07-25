<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../css/manager-styles.css">
    <script src="../../js/manager-script.js"></script>
    <title>Manage Shop</title>
</head>

<style>
    #dBordBtn2 {
        background-color: orange;
        color: white;
    }

    ;

    #body {
        background-image: url("bodybg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }

    ;
</style>
<style>
    /* CSS code for navigation bar styling */
    nav {
        background-color: #f2f2f2;
        padding: 10px;
    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    #li {
        display: inline-block;
        margin-right: 10px;
    }

    a {
        display: block;
        padding: 8px;
        text-decoration: none;
        color: #333;
    }

    a:hover {
        background-color: #ddd;
    }
</style>
<style>
    body {
        background-image: url("img1.jpg");
        background-size: 100%;
        /*background-repeat: no-repeat;  */
    }
</style>

<body>


    <div class="sidebar">

        <div class="user-details">
            <image src="pro.png" width="80px" height="80px"></image>
            <div class="user-name">Mr.Admin</div>
        </div>

        <ul style="text-align: center">
            <li><a id="dBordBtn1" href="manager/dashbord.php"><img src="../../assect/dashBordIcon/dashbord-icon.png">Dashboard</a></li>
            <li><a id="dBordBtn2" href="manager/manageshop.php"><img src="../../assect/dashBordIcon/manageShop-icon.png">Manage Shop</a></li>
            <li><a id="dBordBtn3" href="manager/genrep.php"><img src="../../assect/dashBordIcon/report-icon.png">Generate Report</a></li>
            <li><a id="dBordBtn4" href="manager/postann.php"><img src="../../assect/dashBordIcon/annousment-icon.png">Post Announcement</a></li>
            <li><a id="dBordBtn5" href="manager/calender.php"><img src="../../assect/dashBordIcon/calendar-icon.png">Calendar</a></li>
            <li><a id="dBordBtn6" href="manager/faq.php"><img src="../../assect/dashBordIcon/FAQ-icon.png">FAQ</a></li>
            <li><a id="dBordBtn7" href="/isuri/admin/managePaymentMethod/managePaymentMethod.php"><img src="../../assect/dashBordIcon/payment-icon.png">Manage PaymentMethod</a></li>
            <li><a id="dBordBtn8" href="../manageUserInter.php"><img src="../../assect/dashBordIcon/manageUser-icon.png">ManageUser</a></li>
        </ul>

    </div>

    <div class="menuBar">
        <img src="../../assect/menuBar/logo.png" alt="logo" id="menuBar-logo">
        <form action="/search" method="get" id="search-option">
            <input type="text" id="search" name="q">
            <button type="submit">Search</button>
        </form>
        <div class="user-profile-container">
            <img src="../../assect/menuBar/user.png" alt="" id="menuBar-profile-photo">
            <div class="user-profile-manage">
                <button>Edit Profile</button>
                <button>Log out</button>
            </div>
        </div>
    </div>

    <div class="main">
        <!-- your code type here -->

        <nav>
            <ul>
                <li id="li"><a href="manageshop.php">Item details</a></li>
                <li id="li"><a href="availabliity.php">Availability and prices</a></li>
                <li id="li"><a href="additem.php">Add item</a></li>
                <li id="li"><a href="removeitem.php">Remove item</a></li>
            </ul>
        </nav>
        <br>

        <h2 style="color:red;"><u>Shop Item Details</u></h2>

        <!---------------------------------------------item details--------------------------------------------------------------------->

        <?php
        // Assuming you have already established a database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "online_fitnes_trainer";

        // Create a new connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check the connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Perform a query
        $query = "SELECT * FROM item";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if ($result && mysqli_num_rows($result) > 0) {


            // Fetch rows and render the data
            while ($row = mysqli_fetch_assoc($result)) {
                // Access individual columns using the column name as the key
                $column1 = $row['name'];
                $column2 = $row['INO'];
                $column3 = $row['description'];
                $column4 = $row['price'];
                $column5 = $row['stock'];

                // Render a table row with the data
                echo "<br>" . "<hr>";
                echo  "<h3>" . "<span style='color: blue'>" . $column1 . "</span>" . "</h3>";

                echo  "<h4>" . "<span style='color: green'>Item code : " . "</span>" . "<span style='color: gray'>" . $column2 . "</span>" . "</h4>";

                echo "<h4>" . "<span style='color: green'>Description : </span>" . "<span style='color: gray'>" . $column3 . "</span>" . "</h4>";

                echo  "<h4>" . "<span style='color: green'>" . "Price : " . "</span>" . "<span style='color: gray'>" . $column4 . "</span>" . "</h4>";

                echo  "<h4>" . "<span style='color: green'>" . "Availability : " . "</span>" . "<span style='color: gray'>" . $column5 . "</span>" . "</h4>";
            }

            // Free the result set
            mysqli_free_result($result);
        }
        // Close the connection
        mysqli_close($conn);
        ?>

    </div>


</body>

</html>