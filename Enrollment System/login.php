<?php
    include 'config.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NCST Education System</title>
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <link rel="stylesheet" href="style/login.css?v=3">
    <link rel="stylesheet" href="style/js/sweetalert2.min.css">
</head>
<body>
    <header>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #ffffff;">
        <div class="container px-4">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="img/NCST LOGO TWO.png" alt="NCST-logo" class="me-3" style="width: 45px; height: 45px;">
                <span style="color:#253475; font-size:22px; font-weight:bold; letter-spacing: 1px;">NCST Education System</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>  
    </header>
    <main>
        <!--Login Section-->
        <section class="centered-section">
            <div class="container d-flex justify-content-center align-items-center vh-100">
               <div class="card">
                    <div class="card-body">
                        <h2 class="text-center mb-3 fw-bold">Login</h2>
                        <p class="text-center mb-0">Please enter your login details</p>
                        <p class="text-center">to enter</p>
                        <form action="login-handler.php" method="post" class="d-flex flex-column align-items-center mt-5">
                            <input type="text" class="form-control mb-4 input-account" name="username" placeholder="Username" id="idLogin" pattern="[a-zA-Z0-9-]+" required>
                            <input type="password" class="form-control mt-1 input-account" name="password" placeholder="Password" id="idPassword" pattern="[a-zA-Z0-9-]+" required>
                            <div class="row mt-4">
                                <div class="col remember-checkbox">
                                    <input type="checkbox" name="remember" id="remember">
                                    <label for="remember">Remember me</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-submit mt-4" name="login" id="submit">Login</button>
                        </form>
                        <a href="index.php" class="text-center mt-3 main-page">Back to main page</a>
                    </div>
               </div>
            </div>
        </section>
    </main>

    <script src="style/js/jquery-3.7.1.min.js"></script>
    <script src="style/login.js"></script>
    <script src="style/js/sweetalert2.min.js"></script>
    
    <?php
        include 'login-message/login-success-alert.php';
        include 'login-message/login-error-alert.php';
        include 'login-message/session-expired-alert.php';
    ?>
</body>
</html>     
                  