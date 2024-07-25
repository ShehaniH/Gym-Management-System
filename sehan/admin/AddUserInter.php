<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/admin-styles.css">
    <script src="../js/script-admin.js"></script>
    <title>Add User</title>
</head>

<body>

    <!-- side bar code in hear -->
    <div class="sidebar">

        <!-- <div class="user-details"> -->
            <!-- add profile picture to here -->
            <!-- <div class="user-profile"></div> -->
            <!-- add user name to here -->
            <!-- <div class="user-name">John Doe</div> -->
        <!-- </div> -->

        <div class="user-details">
            <image src="manager/pro.png" width="80px" height="80px"></image>
            <div class="user-name">Mr.Admin</div>
        </div>

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

        <style>

        </style>

        <!-- form in hear -->

        <?php include '../admin/add-webmaster.php'; ?>

        <!-- <form id="addWebmaster-form" action="" method="POST">
            <label for="webmasterId">Webmaster ID:</label>
            <input type="text" id="webmasterId" name="webmasterId" value="<?php getWebNewWasterID() ?>" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="accessLevel">Access Level:</label>
            <select id="accessLevel" name="accessLevel">
                <option value="manager" selected>Manager</option>
                <option value="admin">Admin</option>
            </select>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <span id="passwordError" class="error-icon"></span>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <input id="submit-btn" type="submit" name="submit-btn" value="Add Webmaster">
            <button type="button" onclick="confirmClearForm()">Clear</button>
        </form> -->


        <div style="display: flex; align-items: center;">
            <button style="width: 70px; height: 25px; border-radius: 5px; background-color: orange; border: none; color: white;" onclick="navigateManageuser()"> <- BACK</button>
                    <h2 style="color: rgb(88, 88, 199); margin-left: 300px;">Add Webmaster</h2>
        </div>


        <form id="addWebmaster-form" action="" method="POST">
            <label for="webmasterId">Webmaster ID:</label>
            <input type="text" id="webmasterId" name="webmasterId" value="<?php getWebNewWasterID() ?>" readonly required>

            <div class="row">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>

            <div class="row">
                <div>
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>

                <div>
                    <label for="accessLevel">Access Level:</label>
                    <select id="accessLevel" name="accessLevel">
                        <option value="manager">Manager</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

            </div>

            <div class="row">
                <div>
                    <label for="contact1">Contact Number 1:</label>
                    <input type="text" id="contact1" name="contact1" placeholder="Optional">
                </div>

                <div>
                    <label for="contact2">Contact Number 2:</label>
                    <input type="text" id="contact2" name="contact2" placeholder="Optional">
                </div>

            </div>

            <div style="display: flex; flex-direction: column;">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <span id="passwordError" class="error-icon"></span>
            </div>


            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <div>
                <input id="submit-btn" type="submit" name="submit-btn" value="Add Webmaster">
                <button type="button" onclick="confirmClearForm()">Reset</button>
            </div>
        </form>

        <script>
            disableAddWebmasterBtn();
            document.getElementById("password").addEventListener("input", validatePassword);
            document.getElementById("webmasterId").addEventListener("input", validateForm);
            document.getElementById("name").addEventListener("input", validateForm);
            document.getElementById("email").addEventListener("input", validateForm);
            document.getElementById("address").addEventListener("input", validateForm);
            document.getElementById("accessLevel").addEventListener("input", validateForm);
            document.getElementById("password").addEventListener("input", validateForm);
            document.getElementById("confirmPassword").addEventListener("input", validateForm);
            document.getElementById("contact1").addEventListener("input", validateForm);
            document.getElementById("contact2").addEventListener("input", validateForm);
        </script>

        <!-- main end here -->
    </div>

</body>

</html>