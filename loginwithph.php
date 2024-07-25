<?php

// Database connection settings
$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

// Login function
function login($user_name, $password_) 
{

    global $conn;
    $stmt = $conn->prepare("SELECT * FROM register WHERE user_name = ? AND password = ?");
    $stmt->bind_param("ss", $user_name, $password_);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();
    return $user;

}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST['user_name'];
    $password_ = $_POST['password_'];

    $user = login($user_name, $password_);
    
    if ($user)
     {
        echo "Login successful. Welcome, " . $user["user_name"] . "!";


        echo '<script>  
          alert("Login  successful!");  
              </script>';
        

        $link = '<a href="isuri\editeProfile.html">Enter to your profile page</a>';


        echo  $link;
        
    } 
    
    else
    {
        echo "Invalid username or password.";
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
      height:460px;
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
      font-size: 16px;
      color:black;
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

    button:hover{
      background-color:navy;
      color:white;
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
      text-decoration: underline
    }
    
    .staff{
      font-size:20px;

    }

    .staff:hover{
      color:red;
    }

    .reset{
      
      background-color:white;
      color:black;
    }

    .rest:hover{
      background-color:blue;
      color:white;
    }



    </style>
  <title> GYM TRAINER </title>
    </head>
 <body background="pexels-felix-mittermeier-957002.jpg"> 
  
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="" method="post">
          <h2>Login</h2>
          <div class="inputbox">
            <icon-icon name="mail-outline"></icon-icon>
            <input type="Username" name="user_name"  required>
            <label for="">Username</label>
          </div>
          <br>
          <br>
          <br>
          <div class="inputbox">
            <icon-icon name="lock-closed-outline"></icon-icon>
            <input type="password" name="password_" required>
            <label for="">Password</label>
          </div>
          <br>
          <br>
          <br>
          <br>
          


          <div class="forget">
          <input type="checkbox" name="remember_me"> Remember me

            <a href="forgotpassword.php">Forget Password</a>
            <br>
            <label for="" > Do you want to reset password? </label>
          <a href="resetnewpassword.php" >  Reset Your Password </button> 
          </div>
          
          
          <div class="new">
          <button name="login"> <a href="loginwithph.php">    Log In  </a>  </button>
            <p class="stafff">
              <a href ="stafflogin.php" > Log in as admin?  </a> </p>    

              <p class="stafff">
              <a href ="managerlog.php" > Log in as manager?  </a> </p>   
               <div class="register">
            <p>Don't have an account, Sign up here <a href="registerIsset.php"><b> Register </b></a></p>

          </div>
         
          </div>
        </form>
      </div>
    </div>
  </section>

</body>
</html>