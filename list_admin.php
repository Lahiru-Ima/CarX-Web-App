<?php require_once('inc/header_admin.php'); ?>
    <?php
    session_start();

    require_once('inc/connection.php');

    $user_email = $_SESSION["email"];
    $user_password = $_SESSION["password"];

    $sql = "SELECT email, password FROM admins WHERE email='$user_email' AND password='$user_password' ";
    $result = $conn->query($sql);

    if ($result -> num_rows > 0) {

        $sql_2 = "SELECT * FROM car_owners";
        $result_2 = $conn->query($sql_2);

        if ($result_2 -> num_rows > 0) {
            // output data of each row
            echo "<table border = 1>
            <tr>
                <th>Member Id</th>
                <th>First name</th>
                <th>Last Name</th>
                <th>NIC Number</th>
                <th>City</th>
                <th>Email</th>
            </tr>";


            while ($row = $result_2 -> fetch_assoc()) {
                echo "<tr>";
                echo "<td>". $row['member_id'] ."</td>";
                echo "<td>". $row['f_name'] ."</td>";
                echo "<td>". $row['l_name'] ."</td>";
                echo "<td>". $row['nic'] ."</td>";
                echo "<td>". $row['city'] ."</td>";
                echo "<td>". $row['email'] ."</td>";
                echo "</tr>";
            }
            echo "</table>";
            }
        else {
            echo '<script>alert("Error getting members list")</script>';
            require_once('index_admin.php');
        }
    }else {
        echo "<script>alert('Admin authentication error')</script>";
        require_once('index_admin.php');
    }

    $conn->close();
    ?>
<?php require_once('inc/footer.php'); ?>
