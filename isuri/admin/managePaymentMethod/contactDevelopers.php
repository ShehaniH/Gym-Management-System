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

        <!-- contact developers title -->
        <center>
            <h2 style="color: blue;">Contact Developers</h2>
        </center>
        <a style="background-color: orange; text-decoration: none; padding:3px 5px; color: white;" href="managePaymentMethod.php">
            < Back</a>

                <div>
                    <p style="width: 45%;margin-left:0%;">Please use this form to contact us and we will get back to
                        you as soon as possible
                    </p>
                </div>

                <!-- contact details -->

                <form action="" method="POST">
                    <div class="contact-developers">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="contact-developers">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="contact-developers">
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>

                    <div class="contact-developers">
                        <input id="contact-submit" type="submit" value="Submit">
                    </div>
    </div>
    </form>

    <!-- end of the main  -->
    </div>


</body>

</html>