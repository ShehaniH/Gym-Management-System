<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css\styles.css">
    <script src="js\script.js"></script>
    <title>Add Item</title>
</head>

<style>
    #manageshop{
        background-color: orange;
        color: white;
    };

    #body {
        background-image: url("bodybg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    };
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

<body >


    <div class="sidebar">

    <div class="user-details"> 
            <image src="pro.png" width="80px" height="80px"></image>
            <div class="user-name">Mr.Manager</div>
        </div> 

        <ul style="text-align: center">
            <li><a href="dashbord.php" id="dashboard"><img src="assect\dashBordIcon\dashbord-icon.png">Dashboard</a></li>
            <li><a href="manageshop.php" id="manageshop"><img src="assect\dashBordIcon\manageShop-icon.png">Manage Shop</a></li>
            <li><a href="genrep.php"><img src="assect\dashBordIcon\report-icon.png">Generate Report</a></li>
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
        
        <nav>
            <ul>
                <li id="li"><a href="manageshop.php">Item details</a></li>
                <li id="li"><a href="availabliity.php">Availability and prices</a></li>
                <li id="li"><a href="additem.php">Add item</a></li>
                <li id="li"><a href="removeitem.php">Remove item</a></li>
            </ul>
        </nav>
        <br> 

        

<h3 style="color:red;">Add item </h3>


    <form method="post" action="add.php">

        Enter Item code : <input type="number" name="itemno"><br><br>
        Enter Item Name : <input type="text" name="itemname"><br><br>
        Enter Description : <textarea name="description" rows="4" cols="50"></textarea><br><br>
        Enter Category : <input type="text" name="cat"><br><br>
        Enter Star ratings (out of 5) : <input type="number" name="star"><br><br>
        Enter Price : <input type="number" name="price"><br><br>
        Enter available stock : <input type="number" name="avstock"><br><br>

        <input class="submit-button-add" type="submit" value="Add item">

    </form>

    <br><br>



        
    </div>


</body>

</html>