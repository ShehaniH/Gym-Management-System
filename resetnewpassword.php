<?php


// Database connection details
$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";

// Create a connection

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update password function
function updatePassword($username, $newPassword) 
{
    global $conn;
    $stmt = $conn->prepare("UPDATE register SET password = ? WHERE user_name = ?");

    $stmt->bind_param("ss", $newPassword, $username);

    $stmt->execute();

    $stmt->close();
}


// Handle password reset form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $username = $_POST['user_name'];
    $email = $_POST['email'];
    $oldPassword = $_POST['password_'];
    $newPassword = $_POST['newpassword_'];

    // Perform any necessary validation here

    // Check if the entered username, email, and old password match the database

    $stmt = $conn->prepare("SELECT * FROM register WHERE user_name = ? AND email = ? AND password = ?");
    $stmt->bind_param("sss", $username, $email, $oldPassword);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    if ($user) {
        // Update the password

        updatePassword($username, $newPassword);

        echo "Password updated successfully.";
        echo '<script>alert("Registration successful!");</script>';
    } 
    
    else {
        echo "Invalid username, email, or old password.";
    }
}


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

    .register  a:hover{
      text-decoration: none;
    }

    .black{
      color:antiquewhite;
      font-size: 20px;
      
    }

    .black:hover{
        color:aquamarine;

    }
    
    </style>

  <title> GYM TRAINER </title>

    </head>
 <body background="pexels-felix-mittermeier-957002.jpg"> 
  
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="" method="post">
          <h2>Reset New Password</h2>
          <div class="inputbox">
            <input type="email" name="email" required>
            <label for="">User Email</label>
          </div>
          <br>
          <br>
          <br>
          <div class="inputbox">
            <input type="name"  name="user_name" required>
            <label for="">User Name</label>
            </div>
         
          <br>
          <br>
          <br>

          <div class="inputbox">
            <input type="password" name="password_" required>
            <label for="">Old Password</label>
            </div>
            <br>
            <br>
            <br>
            <div class="inputbox">
                <input type="password" name="newpassword_" required>
                <label for="">New Password</label>
                </div>

          <br>
          <br>
          <br>
          <br>
          <br>  
            
          
          <div class="new">
          <button name="reset"> Reset Password</button>
          <div class="register">
            
                <a href="loginwithph.php"><span class="black">Back To Login Page</span> </a>
          </div>
          </div>
        </form>
      </div>
    </div>
  </section>

</body>
</html>