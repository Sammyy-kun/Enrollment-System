<?php if (isset($_SESSION['login_error'])): ?>
<script>
$(document).ready(function() {
    Swal.fire({
        icon: 'error',
        title: 'Login Failed!',
        text: '<?php echo htmlspecialchars($_SESSION['login_error']); ?>',
        confirmButtonText: 'Try Again',
        confirmButtonColor: '#dc3545',
        allowOutsideClick: true
    });
});
</script>
<?php 
    unset($_SESSION['login_error']);
endif; 
?>
