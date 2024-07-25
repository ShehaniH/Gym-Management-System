<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../../css/manager-styles.css">
    <!-- <script src="../../js/manager-script.js"></script> -->
    <title>faq page</title>
</head>

<style>
    #dBordBtn6 {
        background-color: orange;
        color: white;
    }

    #body {
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }

    h2 {
        text-align: center;
    }

    .question {
        margin-bottom: 10px;
    }

    .answer {
        margin-bottom: 20px;
    }

    .answer p:last-child {
        margin-bottom: 0;
    }

    .toggle-icon {
        cursor: pointer;
    }

    body {
        background-image: url("bodybg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<body>
    <div class="sidebar">

        <div class="user-details">
            <image src="pro.png" width="80px" height="80px"></image>
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

    <div class="menuBar">
        <img src="/assect/menuBar/logo.png" alt="logo" id="menuBar-logo">
        <form action="/search" method="get" id="search-option">
            <input type="text" id="search" name="q">
            <button type="submit">Search</button>
        </form>
        <div class="user-profile-container">
            <img src="/assect/menuBar/user.png" alt="" id="menuBar-profile-photo">
            <div class="user-profile-manage">
                <button>Edit Profile</button>
                <button>Log out</button>
            </div>
        </div>
    </div>

    <div class="main" id="body">
        <!-- your code type here -->
        <div class="container">
            <h2>Frequently Asked Questions</h2>

            <div class="question">
                <h3>Question 1?</h3>
                <div class="answer">
                    <p>Answer to question 1.</p>
                </div>
                <span class="toggle-icon">+</span>
            </div>

            <div class="question">
                <h3>Question 2?</h3>
                <div class="answer">
                    <p>Answer to question 2.</p>
                </div>
                <span class="toggle-icon">+</span>
            </div>

            <div class="question">
                <h3>Question 3?</h3>
                <div class="answer">
                    <p>Answer to question 3.</p>
                </div>
                <span class="toggle-icon">+</span>
            </div>
        </div>

    </div>


</body>

</html>