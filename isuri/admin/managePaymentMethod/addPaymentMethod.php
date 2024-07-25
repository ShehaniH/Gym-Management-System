<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../css/managePaymentMethod.css">
    <!-- <script src="js\script.js"></script> -->
    <title>Admin Dashboard</title>


</head>

<style>
    #dBordBtn7 {
        background-color: orange;
        color: white;
    }
</style>

<body>

    <!-- side bar code in hear -->
    <div class="sidebar">

        <div class="user-details">
            <image src="../manager/pro.png" width="80px" height="80px"></image>
            <div class="user-name">Mr.Admin</div>
        </div>

        <ul style="text-align: center">
            <li><a id="dBordBtn1" href="../manager/dashbord.php"><img src="../../assect/dashBordIcon/dashbord-icon.png">Dashboard</a></li>
            <li><a id="dBordBtn2" href="../manager/manageshop.php"><img src="../../assect/dashBordIcon/manageShop-icon.png">Manage Shop</a></li>
            <li><a id="dBordBtn3" href="../manager/genrep.php"><img src="../../assect/dashBordIcon/report-icon.png">Generate Report</a></li>
            <li><a id="dBordBtn4" href="../manager/postann.php"><img src="../../assect/dashBordIcon/annousment-icon.png">Post Announcement</a></li>
            <li><a id="dBordBtn5" href="../manager/calender.php"><img src="../../assect/dashBordIcon/calendar-icon.png">Calendar</a></li>
            <li><a id="dBordBtn6" href="../manager/faq.php"><img src="../../assect/dashBordIcon/FAQ-icon.png">FAQ</a></li>
            <li><a id="dBordBtn7" href="../managePaymentMethod/managePaymentMethod.php"><img src="../../assect/dashBordIcon/payment-icon.png">Manage PaymentMethod</a></li>
            <li><a id="dBordBtn8" href="/sehan/admin/manageUserInter.php"><img src="../../assect/dashBordIcon/manageUser-icon.png">ManageUser</a></li>
        </ul>

    </div>

    <!-- this is the menu bar -->
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


    </div>

    <!-- this include main finction and changing things -->
    <div class="main">
        <!-- your code type in here -->


        <!-- add payment method title -->
        <center>
            <h2 style="color: blue;">Add Payment Method Form</h2>
        </center>

        <a style="background-color: orange; text-decoration: none; padding:3px 5px; color: white;" href="managePaymentMethod.php">
            < Back</a>

                <!-- add payment method form -->
                <form class="addPaymentMethod-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="pid">PID:</label>
                        <input type="text" id="pid" name="pid" value="<?php getNextPid() ?>" readonly required>
                    </div>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea id="description" name="description" rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Applies:</label>
                        <div class="radio-group">
                            <input type="radio" id="applies-yes" name="applies" value="1" required>
                            <label for="applies-yes">Yes</label>
                        </div>
                        <div class="radio-group">
                            <input type="radio" id="applies-no" name="applies" value="0" required>
                            <label for="applies-no">No</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Save" class="btn">
                    </div>
                </form>


                <?PHP
                include '../../database/config.php';

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {


                    // Retrieve form data
                    $pid = $_POST['pid'];
                    $name = $_POST['name'];
                    $description = $_POST['description'];
                    $applies = $_POST['applies'];

                    // Prepare the SQL statement
                    $query = "INSERT INTO payment_method (PID, name, description, applies) VALUES ('$pid', '$name', '$description', $applies)";

                    // Execute the query
                    if (mysqli_query($conn, $query)) {
                        // echo "Data inserted successfully";
                        echo '<script>
                            alert("Data inserted successfully");
                            window.location.href = "addPaymentMethod.php";
                            </script>';
                    } else {
                        echo "Error: " . mysqli_error($conn);
                    }
                }
                $conn->close();


                //get next PID from database
                function getNextPid()
                {
                    include '../../database/config.php';

                    $sql = "SELECT PID FROM payment_method ORDER BY PID DESC LIMIT 1;";

                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $data = $row['PID'];
                    } else {
                        $data = "";
                    }

                    echo $data + 1;

                    $conn->close();
                }




                ?>



                <!-- end of the main  -->
    </div>


</body>

</html>