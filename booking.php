<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'hcl mini project';
$conn = new mysqli($server,$user,$pass,$db);
if ($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
}

$Fname = $_POST["Fname"];
$Lname = $_POST["Lname"];
$pnumber = $_POST["pnumber"];
$Pdate = $_POST["Pdate"];
$num_days = $_POST["num_days"];
$email = $_POST["email"];
$Rdate = $_POST["Rdate"];
$veh = $_POST["veh"];
$sql = "INSERT INTO booking(Fname,Lname,pnumber,Pdate,num_days,email,Rdate,Vtype) values('$Fname','$Lname','$pnumber','$Pdate','$num_days','$email','$Rdate','$veh')";
if($conn->query($sql) == TRUE){
    echo "NEW RECORD ADDED";
}
else{
    echo "ERROR: ".$conn->error;
}
$conn->close();
header("Location:http://localhost/index.html");
?>