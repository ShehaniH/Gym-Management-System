<?php

$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";

$con= new mysqli($servername,$username,$password,$dbname);



if($con->connect_error)
{
    die("Connection Failed".$con->connect-error);
}


if (isset($_POST['signup']) )
{
    $name=$_POST['fullname'];
    $NIC=  $_POST['nic'];
    $dob=  $_POST['date'];
    $email=  $_POST['email'];
    $gender= $_POST['gender'];
    $user_name=$_POST['username'];
    $password= $_POST['password'];
}
/*
$sql="INSERT INTO  'member' 
(name,NIC,dob,address,email,gender,user_name,password)
VALUES('$name','$NIC','$dob','$address','$email','$gender','$user_name','$password')";


$result=mysqli_query($con,$sql);

if($result==TRUE)
{
    echo"New Record Added";
}

else{
    echo"Error:" .$sql."<br>".$con->error;
}*/

$sql = "INSERT INTO register (name, NIC, dob, email,gender,user_name, password) 
VALUES ('$name','$NIC','$dob','$email','$gender','$user_name','$password')";

// Execute the query
$result = $con->query($sql);

// Check if the query was successful
if ($result) {
    echo "The user was successfully registered.";
} else {
    echo "There was an error registering the user. Please try again.";
}

// Close the connection to the database
$con->close();

?>

<!DOCTYPE html>
<html>
<head>
  <style>
  
/*&& isset($_POST['password'])==isset($_POST['confirmpassword']) */
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
      height:auto;
      background: transparent;
      background:rgb(236, 143, 143);
      display:flex;
      backdrop-filter:blur(15px);
      justify-content: center;
      align-items: center;
      border-radius: 10px;
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
      top:20%;
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
      padding: 0 35px 0 5px; 
      color:#fff;
    }

    
    .inputbox icon-icon{
      position:absolute;
      right:8px;
      color:#fff;
      font-size: 1.2em;
      top:20px;
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
      text-decoration: underline
    }

    
    button{
        color:rgb(170, 56, 25);
        background-color:white;
    }
    button:hover{
        color:aqua;
        background-color: blueviolet;
    }


    </style>
  <title> GYM TRAINER </title>
    </head>
 <body background="C:\xampp\htdocs\pexels-felix-mittermeier-957002.jpg"> 
  
  <section>
    <div class="form-box">
      <div class="form-value">
        <form action="" method="POST">
          <h2>Sign Up</h2>

          <div class="inputbox">
            <input type="Username" name="fullname" required>
            <label for="">Full Name</label>
          </div>
          <br>
          <br>
          <br>
          
          <div class="inputbox">
            
            <input type="text" name="nic" required>
            <label for="">NIC</label>
          </div>

          
          <br>
          <br>
          
          <div class="inputbox">
           
            <label for="day">DOB</label>
            <br>
            <input type="date" name="date" required>
          </div>

        
          
          <br>
          <br>
          <br>
          <br>
          <div class="inputbox">
            
            <input type="email" name="email" required>
            <label for="">Email</label>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="check">
            <input type="checkbox" name="gender" value="male" onclick="disableOtherCheckboxes()">Male
            <input type="checkbox" name="gender" value="female" onclick="disableOtherCheckboxes()">Female
          </div>

          <div class="inputbox">
            
            <input type="text" name="username" required>
            <label for="">Username</label>
          </div>

          <br>
          <br>
          <br>
          <div class="inputbox">
            
            <input type="password" name="password"required>
            <label for="">Password</label>
          </div>
          <br>
          <br>
          <br>
          <div class="inputbox">
            
            <input type="password"name="confirmpassword" required>
            <label for="">Confirm Password</label>
          </div>
          <br>
          <br>
          <br>
         

          <br>
    
          <br>
          <div class="forget">
           <label for=""> <input type="checkbox" >I agree to the terms and conditions</label>
            <a href="#">terms & conditions</a>
          </div>
        
          
          <div class="new">
          <button name="signup"> Sign Up</button>
          </div>
          <div class="register">
            <p>already have an account <a href="#">Log In</a></p>
          </div>
          
        </form>
      </div>
    </div>
  </section>
  <script>
    
function disableOtherCheckboxes() {
  
  var checkboxes = document.querySelectorAll('input[name="gender"]');


  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i] !== event.target) {
      checkboxes[i].disabled = true;
    }
  }
}


  </script>

</body>
</html>