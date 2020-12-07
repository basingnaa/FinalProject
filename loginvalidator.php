<?php
session_start();

if(isset($_POST["email"]) && isset($_POST["password"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
}else{
    echo "email or password field empty";
    return;
}
$servername = "localhost";
$username = "root";
$dbpassword= "";
$dbname =  "ab848102022";

$conn = new mysqli($servername,$username,$dbpassword,$dbname);

if($conn->connect_error){
    die("Connection to database failed: ".$conn->connect_error);
}

?>