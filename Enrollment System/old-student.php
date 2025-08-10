<?php
    include 'header.php';
?>
<body>
     <div id="sidebar">
        <h5 class="mb-3 ps-3 sublogo">MENU</h5>
        <ul>
            <li class="active">
                <a href="old-student.php">
                    <img src="img/description.svg" alt="">
                    <i class="material-icons f"></i>Enrollment
                </a>
            </li>
            <li>
                <a href="old-student-accountabilities.php">
                    <img src="img/assignment.svg" alt="">
                    <i class="material-icons f"></i>Accountabilities
                </a>
            </li>
        </ul>
        <div class="sidebar-bottom">
            <ul>
                <li>
                    <a href="login.php" class="logout-btn">
                        <i class="material-icons f"></i>Logout
                    </a>
                </li>
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
                <h3 class="fw-bold mt-4">Enrollment</h3>
            </div>
        </main>
    </div>
    <script src="style/new-student.js"></script>  
</body>
</html>