<?php 
    if (isset($_SESSION["email"])){
        $email = $_SESSION["email"];
        $password = $_SESSION["password"];

        $sql = "SELECT email, password FROM admins WHERE email='$email' AND password='$password' ";
        $result = $conn->query($sql);

        $sql_2 = "SELECT email, password FROM car_owners WHERE email='$email' AND password='$password' ";
        $result_2 = $conn->query($sql_2);

        if ($result -> num_rows > 0) {
            require_once('inc/header_admin.php');
        } else {
            if ($result_2 -> num_rows > 0) {
                require_once('inc/header_member.php');
            } else {
                require_once('inc/header_all.php');
            }
        }
    } else {
        require_once('inc/header.php');
    }
?> 
    <iframe class="iframe_list" src="all_cars.php" title="search"></iframe>
    <iframe src="search.php" title="search"></iframe>

<?php require_once('inc/footer_index.php'); ?>


