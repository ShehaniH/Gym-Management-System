<?php
$servername = "127.0.0.1";
$username = "root";
$password ="";
$dbname = "online_fitnes_trainer";

///create conection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn -> connect_errno){
    die("Connection faild: ".$conn->connect_error);
}

// echo "Connect successfuly";

?>