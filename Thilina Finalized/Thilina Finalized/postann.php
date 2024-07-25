<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css\styles.css">
    <!-- <script src="script.js"></script> -->
    <title>Post announcement</title>
</head>

<style>
    #postann{
        background-color: orange;
        color: white;
    }


        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        #input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            height: 100px;
        }

        #button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
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
            <li><a href="genrep.php"><img src="assect\dashBordIcon\report-icon.png">Generate Report</a></li>
            <li><a href="postann.php" id="postann"><img src="assect\dashBordIcon\annousment-icon.png">Post Announcement</a></li>
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
        <div class="container">
            <h2>Post Announcement</h2>
            <form action="announcement.php" method="POST">
                <div class="form-group">
                    <label for="ID">Announcement ID</label>
                    <input id="input" type="text"  name="ID" placeholder="Enter the ID" required>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input id="input" type="text" id="title" name="title" placeholder="Enter the title" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" placeholder="Enter the message" required></textarea>
                </div>
                <div class="form-group">
                    <button id="button" type="submit">Post Announcement</button>
                </div>
            </form>
        </div>

        
    </div>


</body>

</html>