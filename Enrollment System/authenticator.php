 <?php
    // Check if this is a direct URL access (copy-paste) by examining referrer
    $is_direct_access = !isset($_SERVER['HTTP_REFERER']) || 
                       (isset($_SERVER['HTTP_REFERER']) && 
                        strpos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']) === false);
    
    // Check if coming from login page (legitimate flow)
    $from_login = isset($_SERVER['HTTP_REFERER']) && 
                  strpos($_SERVER['HTTP_REFERER'], 'login.php') !== false;
    
    // Check if coming from same domain admin pages (navigation)
    $from_admin_page = isset($_SERVER['HTTP_REFERER']) && 
                      (strpos($_SERVER['HTTP_REFERER'], 'admin-dashboard.php') !== false || 
                       strpos($_SERVER['HTTP_REFERER'], 'admin-students.php') !== false);
    
    // Check session validity
    $has_valid_session = isset($_SESSION['user_id']) && 
                        isset($_SESSION['username']) && 
                        $_SESSION['user_role'] === 'admin' &&
                        isset($_SESSION['access_token']);
    
    // BLOCK DIRECT URL ACCESS (copy-paste URLs)
    if ($is_direct_access && !$from_login) {
        // Destroy session and redirect
        session_unset();
        session_destroy();
        session_start();
        $_SESSION['session_expired'] = true;
        $_SESSION['auth_status'] = 'error';
        $_SESSION['auth_message'] = 'Direct URL access denied. Please login.';
        
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
        header("Location: login.php");
        exit();
    }
    
    // Allow legitimate access
    if ($has_valid_session && ($from_login || $from_admin_page)) {
        // Set session as active if first time from login
        if ($from_login && !isset($_SESSION['session_active'])) {
            $_SESSION['session_active'] = true;
            $_SESSION['session_start_time'] = time();
            $_SESSION['admin_id'] = $_SESSION['user_id'];
        }
        
        // Update activity for navigation between admin pages
        if ($from_admin_page || isset($_SESSION['session_active'])) {
            $_SESSION['last_activity'] = time();
            
            // Check session timeout (extend to 30 minutes for better usability)
            $session_timeout = 1800; // 30 minutes
            if (isset($_SESSION['session_start_time'])) {
                $elapsed_time = time() - $_SESSION['session_start_time'];
                if ($elapsed_time < $session_timeout) {
                    return; // Allow access
                }
            }
        }
    }
    
    // If we reach here, access is denied
    session_unset();
    session_destroy();
    
    // Clear cookies
    if (isset($_COOKIE['user_id'])) {
        setcookie('user_id', '', time() - 3600, '/');
    }
    if (isset($_COOKIE['username'])) {
        setcookie('username', '', time() - 3600, '/');
    }
    if (isset($_COOKIE['user_role'])) {
        setcookie('user_role', '', time() - 3600, '/');
    }
    
    // Start new session and redirect
    session_start();
    
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");
    
    $_SESSION['session_expired'] = true;
    $_SESSION['auth_status'] = 'error';
    $_SESSION['auth_message'] = 'Session expired. Please login again.';
    
    header("Location: login.php");
    exit();
 ?>