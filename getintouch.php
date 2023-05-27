<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'hcl mini project';
$conn = new mysqli($server,$user,$pass,$db);
if ($conn->connect_error){
    die("connection failed: " .$conn->connect_error);
}
/*$sql = "CREATE TABLE logindetails(email varchar(30) NOT NULL,passwd varchar(30) NOT NULL)";
if ($conn->query($sql) == TRUE) {
    echo "Table LoginDetails Created";
}
else {
    echo "Error Creating Tabel: " .$conn->error;
}*/
$Fname = $_POST["name"];
$email = $_POST["email"];
$sub = $_POST["subject"];
$msg = $_POST["msg"];
$sql = "INSERT INTO get_in_touch (Fname,email,sub,msg) values('$Fname','$email','$sub','$msg')";
if($conn->query($sql) == TRUE){
    echo "query submitted";
}
else{
    echo "ERROR: ".$conn->error;
}
$conn->close();
header("Location:http://localhost/index.html");
?>