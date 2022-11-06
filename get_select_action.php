<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search-Page</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
    session_start();

    require_once('inc/connection.php');

    $_SESSION["brand"]=$_POST["brand"];
    $_SESSION["model"]=$_POST["model"];

    $brand = $_SESSION["brand"];
    $model = $_SESSION["model"];


    $sql = "SELECT * FROM car_info JOIN car_owners ON car_member_id = member_id WHERE brand='$brand' AND model='$model' ";
    $result = $conn->query($sql);


    if ($result -> num_rows > 0) {
        // output data of each row
        while ($row = $result -> fetch_assoc()) {
            ?>
            <section class="container">
                <div class="card">
                    <img src="<?php echo $row['image'];?>" class="card-image" width="250px" height="170">
                    <p><b><?php echo $row['brand'];?> <?php echo $row['model'];?></b></p>
                    <p><?php echo $row['car_condition'];?></p>
                    <p><b>Rs.<?php echo $row['price'];?>.00</b></p>
                    <p style="text-align:justify"><?php echo $row['description'];?></p>
                    <!-- <p><?php echo $row['f_name'];?> <?php echo $row['l_name'];?></p> -->
                    <p><?php echo $row['email'];?></p>
                </div>
            </section>
        <?php
            }
        } else {
            echo "Error! loading Page";
        }

    $conn->close(); 
    ?>
</body>
</html>

