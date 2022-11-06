<?php require_once('inc/header_all.php'); ?>
    <div class="login-box">
            <h1>Login</h1>
            <form action="login_action.php" method="post">
                <lable>Email</lable>
                <input type="text" name="email" placeholder="" required>
                <lable>Password</lable>
                <input type="password" name="password" placeholder="" required>
                <input type="submit" name="submit" value="Login">
            </form>
    </div>
    <p class="para-2">Not have an account? <a href="registration.php">Sign Up Here</a></p>
<?php require_once('inc/footer.php'); ?>