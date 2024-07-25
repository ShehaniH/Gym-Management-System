
<!DOCTYPE html>
<html>

    <head>
        <link rel="stylesheet" href="css\styles.css">
        <script src="js\script.js"></script>
        <title>manager Dashboard</title>
    </head>

<style>
    #dashboard{
        background-color: orange;
        color: white;
    }
    .box {
        width: 200px;
        height: 100px;
        background-color: #eaeaea;
        border: 1px solid #ccc;
        padding: 10px;
        margin-right: 62px;
        float: left;
        background-color: lightblue;
    }
    body {
        background-image: url("bodybg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
    }
    /* Define styles for the table */
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    /* Define styles for table headers */
    th {
        background-color: #f2f2f2;
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    
    /* Define styles for table cells */
    td {
        border: 1px solid #ddd;
        padding: 8px;
        color: lightslategray;
    }
    
    /* Define alternate row background color */
    tr{
        background-color: #f9f9f9;
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
        <h2 id="greeting">Welcome</h2>

        <h3>Dashboard</h3>

<div>
    <div class="box">
        <h3 style='color: green'>150</h3>
        <h4>New Visitors.</h4>
    </div>
    
    <div class="box">
        <h3 style='color: green'>30</h3>
        <h4>Schedule Purchases.</h4>
    </div>

    <div class="box">
        <h3 style='color: green'>03</h3>
        <h4>New Reviews.</h4>
    </div>

    <div class="box">
        <h3>    
         <?php
    
            include 'config.php'; 

            $sql = "SELECT COUNT(*) AS row_count FROM `order`";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $count = $row['row_count'];

            echo "<span style='color: green'>".$count."</span>";
         ?>   
        </h3>
        <h4>Recent Orders</h4>
    </div>
    
</div>
<br><br><br><br><br><br><br><br>
        <h3>Recent Orders</h3>

        <!-- kkkkkkkkkkkkkkkk-->

 
<table border="1">
    <tr>
    <th colspan='2'>Item code</th>
    <th colspan='3'>Date & time</th>
    <th colspan='2'>Address</th>
    <th colspan='2'>Quantity</th>
    <th colspan='2'>Total Amount</th>
    </tr>
    <?php
    
    include 'config.php'; 
    
    $query = "SELECT * FROM `order`";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td colspan='2'>" . $row["OID"] . "</td>";
        echo "<td colspan='3'>" . $row["date_time"] . "</td>";
        echo "<td colspan='2'>" . $row["delivery_address"] . "</td>";
        echo "<td colspan='2'>" . $row["QTY"] . "</td>";
        echo "<td colspan='2'>" . $row["total_amount"] . "</td>";
        // Add more table cells if needed
        echo "</tr>";
    }

    $conn->close();

    ?>
</table>


       
 
        <br><br>
    </div>


</body>

</html>