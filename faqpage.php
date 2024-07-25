<?php


$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

    $question=$_POST['question'];

    $sql= "INSERT INTO faq (question)
        VALUES ('$question')";



if ($conn->query($sql) === TRUE) 
{

    // Feedback data inserted successfully
    $faqid = $conn->insert_id;
    echo "Your question is submitted...";
} 

else
 {
    // Error occurred while inserting data
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}



?>

<!DOCTYPE html>
<html>
<head>
  <title>FAQ</title>
    <style>

        #faq {
  width: 100%;
  margin-left: 100px;
}

#left {
  float: left;
  width: 30%;
}

#right {
  float: right;
  width: 70%;
  margin-top: 100px;
  
}

img {
  width: 100px;
  margin-left: 200px;
  margin-bottom: 60px;
}

textarea {
  width: 500px;
  height: 400px;
  font-size: 20px;
}

h2 {
  font-size: 18px;
  margin-bottom: 10px;
  margin-left: 300px;
}

.list {
  list-style-type: none;
  margin-left: 250px;
}

.list li {
  margin-bottom: 10px;
}

h1{
    margin-left: 300px;
}

.first{
    display:flex;
    flex-direction: row;
}

.new1{
    margin-left: 500px;
    margin-top:20px;
    font-size: 26px;
}

.button{
    width:100px;
    height: 50px;
    background-color: aqua;
    border-radius: 10px;
}

.button:hover{
    background-color: blue;
}

 </style>
</head>


<body background="17973908.jpg">

   
    <div class="first">
    <h1>FAQ PAGE</h1>
    <div class="new1">
    <a href="#">Back To Home Page</a>
</div>
    </div>

  <div id="faq">
    <div id="left">
      <img src="149071.png" alt="User icon">

      <P> Ask Your Question Here</P>
      <form action="" method="post">

      <textarea id="question" name="question" > </textarea>
     
      <br>
      <br>
    
        <input class="button" type="submit" value="Submit FAQ">
        <a href=viewfaq.php>  viewfaq </a>
        </form>
    </div>



    <div id="right">
      <h2>Frequently Asked Questions</h2>
      <ul class="list">
        <li><b>Question:</b> What is the FAQ?</li>
        <li><b>Answer:</b> The FAQ is a page that contains frequently asked questions and their answers.</li>
        <br>
        <br>
        <li><b>Question:</b> How can I ask a question?</li>
        <li><b>Answer:</b> To ask a question, simply type your question into the text area on the left side of the page.</li>
        <br>
        <br>
        <li><b>Question:</b> What is the FAQ?</li>
        <li><b>Answer:</b> The FAQ is a page that contains frequently asked questions and their answers.</li>
        <br>
        <br>
        <li><b>Question:</b> How can I ask a question?</li>
        <li><b>Answer:</b> To ask a question, simply type your question into the text area on the left side of the page.</li>
      </ul>
    </div>
  </div>
</body>
</html>