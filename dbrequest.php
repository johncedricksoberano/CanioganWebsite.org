<?php
//Request Form
session_start();
$name = $_POST['name'];
$age = $_POST['age'];
$req = $_POST['req'];
$email = $_POST['email'];
$number = $_POST['number'];
$doc = $_POST['doc'];
$guardian = $_POST['guardian'];
$home_add = $_POST['home_add'];


//Database Connection
$conn = new mysqli("localhost","root","","db_request");
    $sql = "INSERT INTO request(name,age,req,email,number,doc,guardian,home_add)values('{$name}','{$age}','{$req}','{$email}','{$number}','{$doc}','{$guardian}','{$home_add}')";
    if ($conn->query($sql)) {
    	echo "Submitted Request Form";
    }
    else{
    	echo "Error".sql ."<br>" .$conn->error;
    }
    $conn->close();

?>