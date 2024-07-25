<?php

// Database connection configuration

$servername="localhost";
$username="root";
$password="";
$dbname="online_fitnes_trainer";


// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $user_name = $_POST['user_name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    
    $question1 = implode(", ", $_POST['question1']);

    $question2 = implode(", ", $_POST['question2']);

    $question3 = implode(", ", $_POST['question3']);

    $feedback = $_POST['feedback'];

    // Insert the feedback data into the table
    $sql = "INSERT INTO feedback (user_name, age, gender, question1, question2, question3, feedback)
            VALUES ('$user_name', '$age', '$gender', '$question1', '$question2', '$question3', '$feedback')";

    if ($conn->query($sql) === TRUE) 
    {

        // Feedback data inserted successfully
        $feedbackId = $conn->insert_id;
        echo "Thank you for your feedback!";

        echo '<script>  
        alert("  successful!");  
            </script>';

        
    } 
    
    else
     {
        // Error occurred while inserting data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}




/*

// Fetch feedback entries from the database
$selectQuery = "SELECT * FROM feedback";
$result = $conn->query($selectQuery);

// Check if there are any feedback entries
if ($result->num_rows > 0) {
    // Loop through the feedback entries
    while ($row = $result->fetch_assoc()) 
    {
        $feedbackId = $row['feedback_id'];
        $userName = $row['user_name'];
        $age = $row['age'];
        $gender = $row['gender'];
        $question1 = $row['question1'];

        $question2 = $row['question2'];

        $question3 = $row['question3'];

        $feedback = $row['feedback'];

        // Display the feedback entry
        echo "<div>";
        echo "<p>User Name: $userName</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>question1:$question1</p>";
        echo "<p>question2:$question2</p>";
        echo "<p>question3:$question3</p>";
        echo "<p>Feedback: $feedback</p>";

        echo "<form method='POST' action='delete_feedback.php'>";
        echo "<input type='hidden' name='feedback_id' value='$feedbackId'>";
        echo "<button type='submit'>Delete</button>";
        echo "</form>";

        echo "</div>";
    }
} 

else
 {
    echo "No feedback entries found.";
}

// Close the database connection

*/


?>



<!DOCTYPE html>
<html>
<head>

    <style>
        body {
  
  margin: 0;
  padding: 0;
  display:flex;
  flex-direction: column;
  background-repeat: no-repeat;
  background-size: cover;
}

h1 {
  text-align: center;
  margin-top: 10px;
}


form {
  
  border:2px solid rgb(241, 9, 9);
  border-radius: 4px;
  padding:30px;
  width: 600px;
  margin: 0 auto;
  height:auto;
  font-weight: 800;
  color:rgb(25, 15, 26);
  font-size: 2opx;
}

input,
select,
textarea {

  border: 1px solid black;
  padding: 10px;
  margin-bottom: 10px;
  display:flex;
  flex-direction: column;
}

textarea 
{
  height: 200px;
}

input,textarea
{
  background-color: antiquewhite;
}

input:hover,textarea:hover
{
  background-color: rgb(251, 155, 30);
}

input[type="submit"] {
  background-color: green;
  color: white;
  padding: 10px;
  border: none;
  cursor: pointer;
}

.gender,.workout{
    display:flex;
    flex-direction: row;
}

.check{
  display: flex;
  flex-direction: row;
}

.text{
  width:300px;
}



    </style>
  <title>Feedback Page</title>

</head>


<body background="backgr.jpg">
  <form  action="" method="post">
    
  <h1>Feedback Page</h1>
 
    <input class="text" type="text" name="user_name" placeholder="Username">
    
    <br>

    
    <input class="text" type="number" name="age" placeholder="Age">
  
    <br>
  
    <div class="gender">
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
   </div>

   <br>
   <br>
   
    <label>What do you expect from this web site?</label>
   <div class="check">
    <input type="checkbox" name="question1[]"> I expect to lose weight.
    <input type="checkbox" name="question1[]"> I expect to gain muscle.
    <input type="checkbox" name="question1[]"> I expect to improve my fitness.
    <input type="checkbox" name="question1[]"> I expect to learn new exercises.
  </div>
  <br>
  <br>
    
    <label> How often you workout?</label>

    <select name="question2[]">

    <div class="workout">
      <option value="once a week">Once a week</option>
      <option value="twice a week">Twice a week</option>
      <option value="three times a week">Three times a week</option>
      <option value=" four times a week">Four times a week</option>
      <option value="answer5">Five times a week</option>
    </div>
    </select>
    
    <br>
    <br>
    <div class="satisfaction">
    <label> What is your satisfication about web site?</label>
    <select name="question3[]">

      <option value="Very dissatisfied">Very dissatisfied</option>
      <option value="Dissatisfied">Dissatisfied</option>
      <option value="Neutral">Neutral</option>
      <option value="Satisfied">Satisfied</option>
      <option value="Very satisfied">Very satisfied</option>
    </select>
    </div>

    <textarea name="feedback" rows="5" cols="50">Please enter your feedback here.</textarea>
    <input type="submit" value="Submit Feedback">
    <a href="viewfeedback.php"> View Feedback </a>

 


  </form>
</body>
</html>