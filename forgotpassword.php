<?php
// Database connection configuration
$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $nic = $_POST['id'];

    // Check if the details match the database record
    $sql = "SELECT * FROM register WHERE email = '$email' AND user_name = '$user_name' AND NIC = '$nic'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0)
     {
        // Details match, display a success message and send the password reset email
        echo "<script>alert('Password reset email has been sent.');</script>";
        // Send the password reset email using JavaScript or any server-side method
        // ...

        // You can also redirect to a success page
        // header("Location: reset_password_success.php");
    } 
    
    else {
        // Details don't match, show an error message
        echo "<script>alert('Please enter correct details.');</script>";
    }
}

// Close the database connection
$conn->close();
?>




<!DOCTYPE html>
<html>
<head>

        




  <style>
  

    body{
      
      background-repeat: no-repeat;
      background-size: cover;
      font-size:16px;
    }

    section{
      display:flex;
      justify-content:center;
      align-items:110vh;
      width:100%;
      margin-top: 160px;
    }

    .form-box{
      position: relative;
      width:430px;
      height:450px;
      background:transparent;
      border:2px solid rgb(255, 255, 255,0.5);
      border-radius:20px;
      backdrop-filter:blur(15px);
      display:flex;
      justify-content: center;
      align-items: center;

    }

   
    h2{
      font-size: 2em;
      color:rgb(255, 255, 255);
      text-align: center;
    }
    
    .inputbox{
      position: absolute;
      margin:30px 0;
      width: 310px;
      border-bottom: 2px solid white;
    }

    .inputbox label{
      position: absolute;
      top:50%;
      left:5px;
      transform: translateY(-50%);
      color:aliceblue;
      font-size: 1em;
      pointer-events:none;
      transition:.5s;
    }

    input:focus~label,
    input:valid~label{
      top:-5px;
    }

    .inputbox input{
      margin-top: 5px;
      width:260px;
      height:30px;
      background: transparent;
      border:none;
      font-size: 1em;
      padding: 0 35px 0 15px ; 
      color:#fff;
    }

    
    

    .forget{
      margin:-15px 0 15px;
      font-size: .9em;
      color:#fff;
      justify-content: center;
    }

    .forget label input{
      margin-right: 3px;
    }

    .forget{
      margin-top: 50px;
    }

    .new{
      margin-top: 10px;
    }

    .forget label a{
      color:#fff;
      text-decoration:none;
    }

    .forget label a:hover{
      text-decoration: underline;
    }

    button{
      width:100%;
      height:40px;
      border-radius: 40px;
      background: white;
      border:none;
      outline:none;
      cursor:pointer;
      font-size: 1em;
      font-weight: 600;
    }

    .register{
      font-size: .9em;
      color:#fff;
      text-align: center;
      margin:25px 0 10px;
    }

    .register p a{
      text-decoration: none;
      color:white;
      font-weight:600;
    }

    .register p a:hover{
      text-decoration: underline;
    }

    .black{
      color:antiquewhite;
      font-size: 20px;
    }

  
    
    </style>

  <title> GYM TRAINER </title>

    </head>
 <body background="pexels-felix-mittermeier-957002.jpg"> 
  
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="" method="post">
          <h2>Forgot Password</h2>
          <div class="inputbox">
            <input type="email" name="email" required>
            <label for="">User Email</label>
          </div>
          <br>
          <br>
          <br>
          <div class="inputbox">
            <input type="name" name="user_name" required>
            <label for="">User Name</label>
            </div>
         
          <br>
          <br>
          <br>

          <div class="inputbox">
            <input type="ID" name="id" required>
            <label for="">NIC</label>
            </div>
          <br>
          <br>
          <br>
          <br>
          <br>  
            
          
          <div class="new">
          <button name="newpassword"> Request New Password</button>
          <div class="register">
            <p>System admin will check entered details and send 
                <br>
                a new password to your email 
                <br>
                <br>
                <a href="loginwithph.php">  <span class="black">Back To Login Page</span> </a></p>
          </div>

          
          </div>
        </form>
      </div>
    </div>
  </section>

</body>
</html>