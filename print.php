<?php
$servername="localhost";
$username="root";
$password="";
$database="kpi_registration";
//create connection
$conn = new mysqli ($servername, $username, $password, $database);
//check connection
if($conn->connect_error){
    die("connection failed: ".$conn->$connect_error);
}


$id=$_REQUEST['id']

if (isset($_REQUEST['value'])){
    $sql= "SELECT * FROM `reg_students` WHERE id='$id' ";

}

$result=$conn->query($sql)->fetch_all(MYSQLI_ASSOC);
$student="";

foreach ($result as $row) {
    $student.="
        <p>".$row['name']."</p>
        <p>".$row['birth_registration_num']."</p>
        <p>".$row['fathers_name']."</p>
        <p>".$row['fathers_nid_num']."</p>
        <p>".$row['mothers_name']."</p>
        <p>".$row['mothers_nid_num']."</p>
        <p>".$row['email']."</p>
        <p>".$row['contact']."</p>
        <p>".$row['shift']."</p>
        <p>".$row['img_url']."</p>
    ";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form/Print</title>
</head>
<body>
    <?=$student?>
</body>
</html>