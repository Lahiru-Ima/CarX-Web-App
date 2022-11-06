<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search-Box</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <?php
    session_start();

    require_once('inc/connection.php');

    $sql = "SELECT DISTINCT brand FROM car_info ";
    $result_set = $conn->query($sql);

    $brand_list = "";

    while ( $result = mysqli_fetch_assoc($result_set) ) {
        $brand_list .= "<option value=\"{$result['brand']}\">{$result['brand']}</option>";
    }
        $conn->close(); 
    ?>
    <div class=search>
        <form action="get_select_action.php" method="POST">
            <div class="sbrand">
                <label for="brand">Select Brand</label><br><br>
                <select name="brand" id="brand" requried>
                <option value="" disabled selected hidden>Select</option>
                    <?php echo $brand_list; ?>
                </select>
            </div>
            <br>
            <div class="smodel">
                <label for="model">Select Model</label><br><br>
                <select required name="model" id="model"></select>
            </div>
            <input type="submit" name="submit" value="Search">
        </form>
    </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>  
        <script>
            $(document).ready(function(){
                $('#brand').on("change", function(){
                    var brand = $("#brand").val();
                    var getURL = "get_model.php?brand=" + brand;
                    // console.log(getURL);
                    $.get(getURL, function(data, status){
                        console.log(data);
                        $('#model').html(data);
                        // console.log(brand);
                        // console.log(data);
                    });
                });
            });
        </script>
</body>
</html>
