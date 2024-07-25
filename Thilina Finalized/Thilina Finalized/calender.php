<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css\styles.css">
    <!-- <script src="script.js"></script> -->
    <title>Calender</title>

    <style>
        .calendar {
            font-family: Arial, sans-serif;
            width: 1000px;
            height:500px;
            
            border-collapse: collapse;
        }

        .calendar th,
        .calendar td {
            padding: 5px;
            text-align: center;
        }

        .calendar th {
            background-color: #333;
            color: #fff;
        }

        .calendar td {
            border: 1px solid #ccc;
        }

        .calendar .current-day {
            background-color: #1abc9c;
            color: #fff;
        }
    </style>
</head>

<style>
    #cal{
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
            <li><a href="genrep.php"><img src="assect\dashBordIcon\report-icon.png">Generate Report</a></li>
            <li><a href="postann.php"><img src="assect\dashBordIcon\annousment-icon.png">Post Announcement</a></li>
            <li><a href="calender.php" id="cal"><img src="assect\dashBordIcon\calendar-icon.png">Calendar</a></li>
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

    <div class="main" >
  
    <table id="calendar" class="calendar">
        <thead>
            <tr>
                <th colspan="7" id="month-year"></th>
            </tr>
            <tr>
                <th>Sun</th>
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
            </tr>
        </thead>
        <tbody id="calendar-body"></tbody>
    </table>

    <script>
        // Function to generate the calendar
        function generateCalendar() {
            // Get current date
            var date = new Date();
            var year = date.getFullYear();
            var month = date.getMonth();
            var today = date.getDate();

            // Array of month names
            var monthNames = [
                "January", "February", "March", "April", "May", "June", 
                "July", "August", "September", "October", "November", "December"
            ];

            // Get the calendar body and month/year element
            var calendarBody = document.getElementById("calendar-body");
            var monthYear = document.getElementById("month-year");

            // Clear previous calendar
            calendarBody.innerHTML = "";

            // Set the month and year in the header
            monthYear.textContent = monthNames[month] + " " + year;

            // Get the first day of the month
            var firstDay = new Date(year, month, 1).getDay();

            // Calculate the number of days in the month
            var daysInMonth = new Date(year, month + 1, 0).getDate();

            // Generate calendar cells
            var date = 1;
            for (var i = 0; i < 6; i++) {
                // Create a table row
                var row = document.createElement("tr");

                // Create cells for each day of the week
                for (var j = 0; j < 7; j++) {
                    // Check if we've reached the end of the month
                    if (date > daysInMonth) {
                        break;
                    }

                    // Create a table cell
                    var cell = document.createElement("td");

                    // Add the date to the cell
                    cell.textContent = date;

                    // Highlight the current day
                    if (date === today) {
                        cell.classList.add("current-day");
                    }

                    // Append the cell to the row
                    row.appendChild(cell);

                    // Increment the date
                    date++;
                }

                // Append the row to the calendar body
                calendarBody.appendChild(row);
            }
        }

        // Call the generateCalendar function
        generateCalendar();
    </script>
        
    </div>


</body>

</html>