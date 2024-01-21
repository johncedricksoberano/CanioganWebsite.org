<?php
//Incident
session_start();
$date = $_POST['date'];
$time = $_POST['time'];
$location = $_POST['location'];

//Complainant
$name_comp = $_POST['name_comp'];
$address_comp = $_POST['address_comp'];
$num_comp = $_POST['num_comp'];
$cemail = $_POST['cemail'];

//Witness
$name_witness = $_POST['name_witness'];
$address_witness = $_POST['address_witness'];
$num_witness = $_POST['num_witness'];
$wemail = $_POST['wemail'];

//Suspect
$name_sus = $_POST['name_sus'];
$description_sus = $_POST['description_sus'];
$statement = $_POST['statement'];

//Database Connection
$conn = new mysqli("localhost","root","","db_blotter");
    $sql = "INSERT INTO blotter(date,time,location,name_comp,address_comp,num_comp,cemail,name_witness,address_witness,num_witness,wemail,name_sus,description_sus,statement)values('{$date}','{$time}','{$location}','{$name_comp}','{$address_comp}','{$num_comp}','{$cemail}','{$name_witness}','{$address_witness}','{$num_witness}','{$wemail}','{$name_sus}','{$description_sus}','{$statement}')";
    if ($conn->query($sql)) {
    	echo "Submitted Blotter Form";
    }
    else{
    	echo "Error".sql ."<br>" .$conn->error;
    }
    $conn->close();

?>