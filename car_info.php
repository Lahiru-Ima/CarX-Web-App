<?php require_once('inc/header_all.php'); ?>
    <div class="info-box">
        <h1>Car Details</h1>
        <form action="car_info_action.php" method="post" enctype="multipart/form-data">
            <label>Brand</label>
            <input type="text" name="brand" class="input" required>
            <label>Model</label>
            <input type="text" name="model" class="input" required>
            <label>Car_Condition</label><br>
            <div class="custom-select">
                <select type="text" name="car_condition" class="" required>
                    <option value="" disabled selected hidden>select</option>
                    <option value="brand new">Brand New</option>
                    <option value="used">Used</option>
                    <option value="registered">Registered</option>
                    <option value="unregistered">Unregistered</option>
                </select>
            </div><br>
            <label>Price</label>
            <input type="number" name="price" class="input" required>
            <label>Description</label>
            <div class=t-area>
                <textarea name="description" class="input" maxlength="150"></textarea>
            </div>
            <label>Image</label>
            <input type="file" name="image" class="" required>
                <input type="submit" name="submit" value="Register">
        </form>
    </div>
    <p class="para-3">Not have an account? <a href="registration.php">Sign Up Here</a></p>
<?php require_once('inc/footer.php'); ?>