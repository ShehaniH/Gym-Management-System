<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../css/managePaymentMethod.css">
    <!-- <script src="js\script.js"></script> -->
    <title>Manage Payment Method</title>


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

        <div style="display: flex; flex-direction: row; margin-top: 3%;">

            <h3>MANAGEMENT PAYMENT METHOD</h3>
            <hr style="width: 80%; height:1px; border-width:3px; margin-top: 2.3%;">

        </div>

        <div>
            <p style="width: 45%;">The admin page provides managers and admins management capabilities,
                allowing them to create, update, and delete user accounts on the website</p>
        </div>

        <div>
            <a id="contact-developer-btn" href="contactDevelopers.php"><img src="../../assect/managePaymentmethod/call-icon.png">Contact
                developers</a>
        </div>

        <table id="payment-details-table">
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>APPLIES?</th>
                    <th> </th>
            </thead>
            <tbody>

                <!-- <tr>
                <td >Payment_method_01</td>
                <td style="text-align: center;"><input type="checkbox" id=""></td>
                <td style="text-align: center;"><a style="text-decoration: none; cursor: pointer;" href="#" class="button">Edit</a></td>
              </tr> -->

              

                <?php

                include '../../database/config.php';

                // Query to retrieve data from the table
                $query = "SELECT * FROM payment_method";

                // Execute the query
                $result = mysqli_query($conn, $query);

                // Check if the query was successful
                if ($result) {
                    // Fetch rows from the result set
                    while ($row = mysqli_fetch_assoc($result)) {
                        $pid = $row['PID'];
                        $name = $row['name'];
                        $description = $row['description'];
                        $applies = $row['applies'];

                        // Output the data in HTML table format
                        echo '<tr>';
                        echo '<td>' . $name . '</td>';
                        echo '<td style="text-align: center;"><input type="checkbox" id="" disabled ';
                        if ($applies == 1) {
                            echo 'checked >YES';
                        }else{
                            echo '>NO';  //<td> NO </td>
                        }
                        echo '</td>';
                        echo '<td style="text-align: center;"><a style="text-decoration: none; cursor: pointer;" href="editPaymentMethod.php?id=' . $pid . '" class="button">Edit</a></td>';
                        echo '</tr>';
                    }

                    // Free the result set
                    mysqli_free_result($result);
                } else {
                    echo 'Error: ' . mysqli_error($conn);
                }
                ?>


            </tbody>
        </table>

        <div>
            <a id="Management-payment-method-btn" href="#">Management payment method<img src="../../assect/managePaymentmethod/right-arrow.png"></a>
        </div>

        <div>
            <a id="Create-new-payment-method-btn" href="addPaymentMethod.php">Create new payment method<img src="../../assect/managePaymentmethod/plus-img.png"></a>
        </div>


        <!-- end of the main  -->
    </div>


</body>

</html>