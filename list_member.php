<?php require_once('inc/header_member.php'); ?>
    <?php
    session_start();

    require_once('inc/connection.php');

    $email = $_SESSION["email"];
    $password = $_SESSION["password"];

    $sql = "SELECT * FROM car_info JOIN car_owners ON car_member_id = member_id WHERE email='$email' AND password='$password' ";
    $result = $conn->query($sql);

    if ($result -> num_rows > 0) {
        // output data of each row
        echo "<h1>My Car List</h1>";
        while ($row = $result -> fetch_assoc()) {
            ?>
            <section class="container">
                <div class="card">
                    <img src="<?php echo $row['image'];?>" class="card-image" width="250px" height="170">
                    <p><b><?php echo $row['brand'];?> <?php echo $row['model'];?></b></p>
                    <p><?php echo $row['car_condition'];?></p>
                    <p><b>Rs.<?php echo $row['price'];?>.00</b></p>
                    <p style="text-align:justify"><?php echo $row['description'];?></p>
                </div>
            </section>
        <?php
            }
        } else {
            echo "<script>alert('Error! loading Page')</script>";
            require_once('index_member.php');
        }

    $conn->close(); 
    ?>
<?php require_once('inc/footer.php'); ?>
