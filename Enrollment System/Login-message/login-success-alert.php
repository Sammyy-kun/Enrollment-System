<?php if (isset($_SESSION['login_success']) && $_SESSION['login_success'] && isset($_SESSION['redirect_to_dashboard'])): ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'success',
        title: 'Welcome Back!',
        text: 'Hello <?php echo htmlspecialchars($_SESSION['username']); ?>, login successful!',
        confirmButtonText: 'Continue',
        confirmButtonColor: '#253475',
        allowOutsideClick: false,
        timer: 2000,
        timerProgressBar: true
    }).then((result) => {
        window.location.href = 'admin-dashboard.php';
    });
});
</script>
<?php 
    unset($_SESSION['login_success']);
    unset($_SESSION['redirect_to_dashboard']);
endif; 
?>
