<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css\styles.css">
    <!-- <script src="script.js"></script> -->
    <title>Generate Report</title>
</head>

<style>
    #genrep{
        background-color: orange;
        color: white;
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
            <div class="user-name">Mr.Manager</div>
        </div> 

        <ul style="text-align: center">
            <li><a href="dashbord.php" id="dashboard"><img src="assect\dashBordIcon\dashbord-icon.png">Dashboard</a></li>
            <li><a href="manageshop.php"><img src="assect\dashBordIcon\manageShop-icon.png">Manage Shop</a></li>
            <li><a href="genrep.php" id="genrep"><img src="assect\dashBordIcon\report-icon.png">Generate Report</a></li>
            <li><a href="postann.php"><img src="assect\dashBordIcon\annousment-icon.png">Post Announcement</a></li>
            <li><a href="calender.php"><img src="assect\dashBordIcon\calendar-icon.png">Calendar</a></li>
            <li><a href="faq.php"><img src="assect\dashBordIcon\FAQ-icon.png">FAQ</a></li>
            
        </ul>

    </div>

    <div class="menuBar">
        <img src="assect\menuBar\logo.png" alt="logo" id="menuBar-logo">
        <form action="/search" method="get" id="search-option">
            <input type="text" id="search" name="q">
            <button type="submit">Search</button>
        </form>
        <div class="user-profile-container">
            <img src="assect\menuBar\user.png" alt="" id="menuBar-profile-photo">
            <div class="user-profile-manage">
                <button>Edit Profile</button>
                <button>Log out</button>
            </div>
        </div>
    </div>

    <div class="main">
        <!-- your code type here -->
        <h2>Generate Reports</h2>
        <form action="" method="post">
        <h4>Select Report :</h4>
        <select>
            <option value="v1">Montly statement</option>
            <option value="v2">Web traffic report</option>
            <option value="v3">Financial statement</option>
            
        </select>

        <h4>Select Month</h4>
        <select>
            <option value="v1">January</option>
            <option value="v2">February</option>
            <option value="v3">March</option>
            <option value="v1">April</option>
            <option value="v2">May</option>
            <option value="v3">June</option>
            <option value="v1">July</option>
            <option value="v2">August</option>
            <option value="v3">September</option>
            <option value="v1">Octomber</option>
            <option value="v2">November</option>
            <option value="v3">December</option>
            
        </select>
        <h4>Select year</h4>
        <select>
            <option value="v1">2021</option>
            <option value="v2">2022</option>
            <option value="v3">2023</option>
            
        </select>
        
        <h4>Select report type:</h4>

        <input type="radio">Simple
        <input style="margin-left: 80px;" type="radio">Detailed
        <br><br><br><br><br>
        <input style="background-color:aliceblue; width:100px;" type="button" value="submit">

        </form>


        
        <br><br>
    </div>


</body>

</html>