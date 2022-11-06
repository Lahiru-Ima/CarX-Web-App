<?php
session_start();

require_once('inc/connection.php');

$email = $_SESSION["email"];
$password = $_SESSION["password"];

$sql = "SELECT member_id FROM car_owners WHERE email='$email' AND password ='$password'";
$result = $conn->query($sql);

if ($result -> num_rows > 0) {
    // output data of each row
    while ($row = $result -> fetch_assoc()) {
        $mem_id = $row['member_id'];
    }
} else {
    echo "<script>alert('Error getting member_ID')</script>";
    require_once('index_member.php');
}

//upload a image
if (isset($_POST['submit'])){

    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_size = $_FILES['image']['size'];
    $temp_name = $_FILES['image']['tmp_name'];

    $upload_to = 'images/';
    $path = $upload_to.$file_name;

    $file_uploaded = move_uploaded_file($temp_name, $upload_to.$file_name);
}

//Insert data
$sql_2 = "INSERT INTO car_info (brand,model,car_condition,price,description,image,car_member_id) 
VALUES('$_POST[brand]','$_POST[model]','$_POST[car_condition]','$_POST[price]','$_POST[description]','$path',$mem_id)";


if ($conn->query($sql_2) === TRUE) {
    echo "<script>alert('Car record added successfully!')</script>";
    require_once('index_member.php');
} else {
    echo "Error adding Car: " . $sql_2 . "<br>" . $conn->error;
}

$conn->close(); 
?>