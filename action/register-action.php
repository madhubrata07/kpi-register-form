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
$shift=$_REQUEST['shift'];
$image=$_FILES['img_url'];

$dir="../upload_files/";
$file_name=$dir.rand(1,99999).$image['name'];

move_uploaded_file(
    $image['tmp_name'],$file_name
);

$imgUrl=str_replace("../../", "",$file_name);


$sql="INSERT INTO `reg_students` ( `name`, `birth_registration_num`, `fathers_name`, `fathers_nid_num`, `mothers_name`, `mothers_nid_num`, `email`, `contact`, `shift`, `img_url`) VALUES ('$name', '$brn', '$fathersName', '$fathersNidNum', '$motherName', '$mothersNidNum', '$email', '$contact', '$shift', '$imgUrl')";

if ($conn->query($sql)===TRUE){
    header('location:/kpi-register-form/index.php');
}