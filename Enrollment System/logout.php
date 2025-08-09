<?php
    session_start();
    
    // Unset all session variables
    session_unset();
    
    // Destroy the session
    session_destroy();
    
    // Clear remember me cookies if they exist
    if (isset($_COOKIE['user_id'])) {
        setcookie('user_id', '', time() - 3600, '/');
    }
    if (isset($_COOKIE['username'])) {
        setcookie('username', '', time() - 3600, '/');
    }
    if (isset($_COOKIE['user_role'])) {
        setcookie('user_role', '', time() - 3600, '/');
    }
    
    // Redirect to login page
    header("Location: login.php");
    exit();
?>