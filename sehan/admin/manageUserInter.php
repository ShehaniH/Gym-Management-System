<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/admin-styles.css">
    <script src="../js/script-admin.js"></script>
    <title>Manage User</title>
</head>

<body>

    <!-- side bar code in hear -->
    <div class="sidebar">

        <div class="user-details">
            <image src="manager/pro.png" width="80px" height="80px"></image>
            <div class="user-name">Mr.Admin</div>
        </div>

        <!-- <ul style="text-align: center">
            <li><a id="dBordBtn1" href="../dashbord.php"><img src="../assect/dashBordIcon/dashbord-icon.png">Dashboard</a></li>
            <li><a id="dBordBtn2" href="#"><img src="../assect/dashBordIcon/manageShop-icon.png">Manage Shop</a></li>
            <li><a id="dBordBtn3" href="#"><img src="../assect/dashBordIcon/report-icon.png">Generate Report</a></li>
            <li><a id="dBordBtn4" href="#"><img src="../assect/dashBordIcon/annousment-icon.png">Post Announcement</a></li>
            <li><a id="dBordBtn5" href="#"><img src="../assect/dashBordIcon/calendar-icon.png">Calendar</a></li>
            <li><a id="dBordBtn6" href="#"><img src="../assect/dashBordIcon/FAQ-icon.png">FAQ</a></li>
            <li><a id="dBordBtn7" href="../managePaymentMethod.php"><img src="../assect/dashBordIcon/payment-icon.png">Manage PaymentMethod</a></li>
            <li><a id="dBordBtn8" href="../admin/manageUserInter.php"><img src="../assect/dashBordIcon/manageUser-icon.png">ManageUser</a></li>
        </ul> -->

        <ul style="text-align: center">
            <li><a id="dBordBtn1" href="manager/dashbord.php"><img src="../assect/dashBordIcon/dashbord-icon.png">Dashboard</a></li>
            <li><a id="dBordBtn2" href="manager/manageshop.php"><img src="../assect/dashBordIcon/manageShop-icon.png">Manage Shop</a></li>
            <li><a id="dBordBtn3" href="manager/genrep.php"><img src="../assect/dashBordIcon/report-icon.png">Generate Report</a></li>
            <li><a id="dBordBtn4" href="manager/postann.php"><img src="../assect/dashBordIcon/annousment-icon.png">Post Announcement</a></li>
            <li><a id="dBordBtn5" href="manager/calender.php"><img src="../assect/dashBordIcon/calendar-icon.png">Calendar</a></li>
            <li><a id="dBordBtn6" href="manager/faq.php"><img src="../assect/dashBordIcon/FAQ-icon.png">FAQ</a></li>
            <li><a id="dBordBtn7" href="/isuri/admin/managePaymentMethod/managePaymentMethod.php"><img src="../assect/dashBordIcon/payment-icon.png">Manage PaymentMethod</a></li>
            <li><a id="dBordBtn8" href="manageUserInter.php"><img src="../assect/dashBordIcon/manageUser-icon.png">ManageUser</a></li>
        </ul>

    </div>

    <!-- this is the menu bar -->
    <div class="menuBar">
        <img src="../assect/menuBar/logo.png" alt="logo" id="menuBar-logo">
        <form action="/search" method="get" id="search-option">
            <input type="text" id="search" name="q">
            <button type="submit">Search</button>
        </form>
        <div class="user-profile-container">
            <img src="../assect/menuBar/user.png" alt="" id="menuBar-profile-photo">
            <div class="user-profile-manage">
                <button>Edit Profile</button>
                <button>Log out</button>
            </div>
        </div>
    </div>


    </div>

    <!-- this include main finction and changing things -->

    <div class="main">
        <!-- my code here -->

        <style>
            #dBordBtn8 {
                background-color: orange;
                color: white;
            }
        </style>

        <?php include '../admin/load-manageUser.php'; ?>

        <div>
            <h3>User</h3>
            <p style="width: 45%;">The admin page provides managers and admins management capabilities,
                allowing them to create, update, and delete user accounts on the website.</p>


            <button id="add-uder-btn" onclick="navigateAddUser()">Add User</button>

            <!-- this container load uses -->
            <div class="user-load-container">

                <?php
                loadUsers();
                ?>

            </div>
        </div>



        <div>
            <h3>User request</h3>
            <p style="width: 45%;">The admin page facilitates the management of user requests,
                allowing administrators to handle and respond to user inquiries, issues, or requests efficiently.
                It provides a centralized platform for administrators to review, process,
                and take appropriate actions on user requests.</p>

            <button id="add-uder-btn">Show All</button>

            <!-- this container load user request -->
            <div class="user-request-load-container">

                <?php
                loadUserRequests();
                ?>

            </div>
        </div>

        <!-- main end here -->
    </div>





</body>



</html>