<?php
//Registration Form
session_start();
$name = $_POST['name'];
$birth = $_POST['birth'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$home_add = $_POST['home_add'];
$personalnum = $_POST['personalnum'];
$email = $_POST['email'];
$doc = $_POST['doc'];
$spouse = $_POST['spouse'];
$org = $_POST['org'];
$business = $_POST['business'];
$other = $_POST['other'];
$date = $_POST['date'];
$loc = $_POST['loc'];


//Database Connection
$conn = new mysqli("localhost","root","","db_register");
    $sql = "INSERT INTO register(name,birth,age,gender,home_add,personalnum,email,doc,spouse,org,business,other,date,loc)values('{$name}','{$birth}','{$age}','{$gender}','{$home_add}','{$personalnum}','{$email}','{$doc}','{$spouse}','{$org}','{$business}','{$other}','{$date}','{$loc}')";
    if ($conn->query($sql)) {
    	echo "Submitted Registration Form";
    }
    else{
    	echo "Error".sql ."<br>" .$conn->error;
    }
    $conn->close();

?>