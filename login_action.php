<?php

//To start session
if(!isset($_SESSION)) {
    session_start();
}

require_once('inc/connection.php');

$_SESSION["email"]=$_POST["email"];
$_SESSION["password"]=$_POST["password"];

$email = $_SESSION["email"];
$password = $_SESSION["password"];


$sql = "SELECT * FROM car_owners WHERE email='$email' AND password='$password' ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo '<script>alert("LOGIN SUCCESSS !!!")</script>';
    require_once('index_member.php');

} else {
    $sql_2 = "SELECT * FROM admins WHERE email='$email' AND password='$password' ";
    $result_2 = $conn->query($sql_2);

    if ($result_2->num_rows > 0) {
        echo '<script>alert("LOGIN AS A ADMIN !!!")</script>';
        require_once('index_admin.php');   
    } else {
        echo '<script>alert("LOGIN FAILED")</script>';
        require_once('login.php');
    }
}

$conn->close(); 
?>