<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css\styles.css">
    <!-- <script src="script.js"></script> -->
    <title>faq page</title>
</head>

<style>
    #faq{
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
            <div class="user-name">Mr.Manager</div>
        </div> 

        <ul style="text-align: center">
            <li><a href="dashbord.php" id="dashboard"><img src="assect\dashBordIcon\dashbord-icon.png">Dashboard</a></li>
            <li><a href="manageShop.php"><img src="assect\dashBordIcon\manageShop-icon.png">Manage Shop</a></li>
            <li><a href="genrep.php"><img src="assect\dashBordIcon\report-icon.png">Generate Report</a></li>
            <li><a href="postann.php"><img src="assect\dashBordIcon\annousment-icon.png">Post Announcement</a></li>
            <li><a href="calender.php"><img src="assect\dashBordIcon\calendar-icon.png">Calendar</a></li>
            <li><a href="faq.php" id="faq"><img src="assect\dashBordIcon\FAQ-icon.png">FAQ</a></li>
            
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

    <div class="main" id="body">
        <!-- your code type here -->
        <div class="container">
        <h2>Frequently Asked Questions</h2> <br>

        <div class="question">
            <h3>Q: How can I sign up for an online fitness program?</h3>
            <div class="answer">
                <p>A: Signing up for an online fitness program is easy. Simply visit our website and click on the "Sign Up" button. Fill out the required information, choose a program that suits your goals and preferences, and complete the payment process. Once signed up, you'll receive instructions on how to get started.</p>
            </div>
            <span class="toggle-icon">+</span>
        </div>

        <div class="question">
            <h3>Q: What types of fitness programs do you offer?</h3>
            <div class="answer">
                <p>A: We offer a variety of fitness programs tailored to different goals and fitness levels. Our programs include weight loss, muscle building, cardio fitness, yoga, and more. Each program is designed by professional trainers to provide effective and balanced workouts.</p>
            </div>
            <span class="toggle-icon">+</span>
        </div>

        <div class="question">
            <h3>Q: Can I access the fitness programs from any device?</h3>
            <div class="answer">
                <p>A: Yes, our online fitness programs are accessible from any device with an internet connection. You can use your computer, tablet, or smartphone to access the program and workout videos. This allows you to exercise at your convenience, whether you're at home, at the gym, or traveling.</p>
            </div>
            <span class="toggle-icon">+</span>
        </div>
    </div>
        
    </div>


</body>

</html>