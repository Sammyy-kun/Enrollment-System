<?php
    include 'config.php';
    session_start();

    if (isset($_REQUEST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $remember = isset($_POST['remember']) ? true : false;

        // DEBUG: Log login attempt
        error_log("Login attempt - Username: $username, Password: $password");

        // Query the admin-account table (get user by username only)
        $query = "SELECT * FROM `admin-account` WHERE username = ?";
        $stmt = $conn->prepare($query);
        
        if ($stmt) {
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();

            // Check if query was successful and user found
            if ($result && $result->num_rows > 0) {
                $user = $result->fetch_assoc();
                
                // DEBUG: Log what we found in database
                error_log("Database user found - Username: " . $user['username']);
                error_log("Input password: '" . $password . "'");
                error_log("Password hash in DB starts with: " . substr($user['password'], 0, 10) . "...");
                
                // Verify password (support both hashed and plain text)
                $password_valid = false;
                
                // Check if password is hashed (bcrypt hashes start with $2y$)
                if (substr($user['password'], 0, 4) === '$2y$') {
                    // Use password_verify for hashed passwords
                    $password_valid = password_verify($password, $user['password']);
                    error_log("Using hashed password verification: " . ($password_valid ? 'VALID' : 'INVALID'));
                } else {
                    // Direct comparison for plain text passwords (temporary fix)
                    $password_valid = ($password === $user['password']);
                    error_log("Using plain text password comparison: " . ($password_valid ? 'VALID' : 'INVALID'));
                }
                
                error_log("Final password verification result: " . ($password_valid ? 'VALID' : 'INVALID'));
                
                if ($password_valid) {
                    // DEBUG: Log successful login
                    error_log("Login successful for user: $username");
                    
                    // Set session variables
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['user_role'] = 'admin'; // Since this is admin-account table
                    $_SESSION['last_activity'] = time(); // Set initial activity time
                    $_SESSION['access_token'] = uniqid('auth_', true); // Generate unique access token

                    // Handle "Remember Me" functionality
                    if ($remember) {
                        setcookie('user_id', $user['id'], time() + (86400 * 30), "/");
                        setcookie('username', $user['username'], time() + (86400 * 30), "/");
                        setcookie('user_role', 'admin', time() + (86400 * 30), "/");
                    }

                    $_SESSION['login_success'] = true;
                    $_SESSION['redirect_to_dashboard'] = true;
                    
                    // DEBUG: Log session variables
                    error_log("Session variables set - login_success: " . ($_SESSION['login_success'] ? 'true' : 'false'));
                    error_log("Session variables set - redirect_to_dashboard: " . ($_SESSION['redirect_to_dashboard'] ? 'true' : 'false'));
                    
                    $stmt->close();
                    header("Location: login.php");
                    exit();
                } else {
                    // Password doesn't match
                    $_SESSION['login_error'] = "Invalid username or password!";
                    
                    $stmt->close();
                    header("Location: login.php");
                    exit();
                }
            } else {
                // No matching user found
                $_SESSION['login_error'] = "Invalid username or password!";
                
                $stmt->close();
                header("Location: login.php");
                exit();
            }
        } else {
            // Database query preparation failed
            $_SESSION['login_error'] = "Database error. Please try again.";
            header("Location: login.php");
            exit();
        }
    }
?>