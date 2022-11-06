<?php
session_start();
// remove all session variables
session_unset();

// destroy the session
session_destroy();
    echo '<script>alert("Logged out successfully!")</script>';
    require_once('index.php');

?>