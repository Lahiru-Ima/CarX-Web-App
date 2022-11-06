<?php
require_once('inc/connection.php');


$sql = "SELECT email FROM car_owners WHERE email = '$_POST[email]' " ; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<script>alert("You are already registerd with this email!")</script>';
    require_once('registration.php');	
	
}else{
    $sql = "INSERT INTO car_owners (f_name,l_name,nic,city,email,password) 
    VALUES('$_POST[f_name]','$_POST[l_name]','$_POST[nic]','$_POST[city]','$_POST[email]','$_POST[password]')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New record created successfully! Thank You for registraring with Us!")</script>';
        require_once('index_member.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close(); 
?>
