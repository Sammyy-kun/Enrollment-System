<?php
    session_start();
    include 'authenticator.php';
    include 'header.php';
    include 'config.php';
?>
<body>
     <div id="sidebar">
        <h5 class="mb-3 ps-3 sublogo">MENU</h5>
        <ul>
             <li>
                <a href="admin-dashboard.php">
                    <img src="img/dashboard.svg" alt="">
                    <i class="material-icons f"></i>Dashboard
                </a>
            </li>
            <li class="active">
                <a href="admin-students.php">
                    <img src="img/student.svg" alt="">
                    <i class="material-icons f"></i>Students
                </a>
            </li>
        </ul>
        <div class="sidebar-bottom">
            <ul>
                <li><a href="#" onclick="confirmLogout()" class="logout-btn"><i class="material-icons f">logout</i>Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="content-wrapper">
        <nav class="navbar">
            <button class="navbar-toggler" type="button">
                <i class="material-icons" style="color: #253475;">menu</i>
            </button>
            <a class="navbar-brand" href="/" style="color: #253475;">NCST Education System</a>
        </nav>
        <!-- Main Content -->
         <main>
            <div class="container">
                <h3 class="fw-bold mt-4">Students</h3>
            </div>
        </main>
    </div>
    <script src="style/new-student.js"></script>
    <script src="style/js/sweetalert2.min.js"></script>
    <?php 
        include 'Logout-message/logout-confirm-alert.php'; 
    ?>
</body>
</html>

