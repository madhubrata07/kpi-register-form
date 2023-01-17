<?php
$servername="localhost";
$username="root";
$password="";
$database="kpi_registration";
//create connection
$conn = new mysqli ($servername, $username, $password, $database);
//check connection
if($conn->connect_error){
    die("connection failed:".$conn->$connect_error);
}

$sql="SELECT * FROM `reg_students` WHERE id=$_REQUEST['id']";
$result=$conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>