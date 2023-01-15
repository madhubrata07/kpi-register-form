<?php
$servername="localhost";
$username="root";
$password="";
$database="kpi_registration";
//create connection
$conn=new mysqli($servername, $username, $password, $database);
//check connection
if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
$name=$_REQUEST['name'];
$brn=$_REQUEST['brn'];
$fathersName=$_REQUEST['fathersName'];
$fathersNidNum=$_REQUEST['fnidno'];
$motherName=$_REQUEST['mothersName'];
$mothersNidNum=$_REQUEST['mnidno'];
$email=$_REQUEST['email'];
$contact=$_REQUEST['contact'];

$sql="INSERT INTO `reg_students` ( `name`, `birth_registration_num`, `fathers_name`, `fathers_nid_num`, `mothers_name`, `mothers_nid_num`, `email`, `contact`) VALUES ('$name', '$brn', '$fathersName', '$fathersNidNum', '$motherName', '$mothersNidNum', '$email', '$contact')";

if ($conn->query($sql)===TRUE){
    header('location:/kpi-register-form/print.php');
}