<?php require_once('inc/header_all.php'); ?>
    <div class="signup-box">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form action="reg_action.php" method="post">
            <label>First Name</label>
            <input type="text" name="f_name" placeholder="" required>

            <label>Last Name</label>
            <input type="text" name="l_name" placeholder="" required>

            <label>NIC</label>
            <input type="text" name="nic" placeholder="" required>

            <label>City</label>
            <input type="text" name="city" placeholder="" required>

            <label>Email</label>
            <input type="text" name="email" placeholder="" required>

            <label>Password</label>
            <input type="text" name="password" placeholder="" required>

            <input type="submit" name="submit" value="Submit">
        </form>
        <p>By clicking the Sign Up button, you agree to our <br>
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
        </p>
    </div>
    <p class="para-2">Already have an account? <a href="login.php">Login here</a></p>
<?php require_once('inc/footer.php'); ?>