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

        <?php include '../admin/show-webmasterDetails.php'; ?>

        <?php include "../admin/update-webmaster.php"; ?>

        <div style="display: flex; align-items: center;">
            <button style="width: 70px; height: 25px; border-radius: 5px; background-color: orange; border: none; color: white;" onclick="navigateManageuser()"> <- BACK</button>
                    <h2 style="color: rgb(88, 88, 199); margin-left: 300px;">update Webmaster Details</h2>
        </div>


        <form id="updateWebmaster-form" action="" method="POST">
            <label for="webmasterId">Webmaster ID:</label>
            <input type="text" id="webmasterId" name="webmasterId" value=<?php echo $id ?> readonly required>

            <div class="row">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="<?php echo $name ?>" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="<?php echo $email ?> " required>
                </div>
            </div>

            <div class="row">
                <div>
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="<?php echo $address ?>" required>
                </div>

                <div>
                    <label for="accessLevel">Access Level:</label>
                    <select id="accessLevel" name="accessLevel">
                        <option value="manager" <?php if ($accessLevelshow == "manager" || $accessLevelshow == "Manager") echo "selected"; ?>>Manager</option>
                        <option value="admin" <?php if ($accessLevelshow == "admin" || $accessLevelshow == "Admin") echo "selected"; ?>>Admin</option>
                    </select>
                </div>

            </div>

            <div class="row">
                <div>
                    <label for="contact1">Contact Number 1:</label>
                    <input type="text" id="contact1" name="contact1" value="<?php if ($contact_no1 != null) echo $contact_no1 ?>" placeholder="Optional">
                </div>

                <div>
                    <label for="contact2">Contact Number 2:</label>
                    <input type="text" id="contact2" name="contact2" value="<?php if ($contact_no2 != null) echo $contact_no2 ?>" placeholder="Optional">
                </div>

            </div>

            <div style="display: flex; flex-direction: column;">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" value=<?php echo $password ?> required>
                <span id="passwordError" class="error-icon"></span>
            </div>


            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" value=<?php echo $password ?> required>

            <div>
                <input id="submit-btn" type="submit" name="submit-btn" value="Update Webmaster">
                <button type="button" onclick="resetForm()">Reset</button>
                <button style="background-color: red; margin-left: 50px;" type="button" onclick="deleteUser(<?php echo $id ?>)">Delete User</button>
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