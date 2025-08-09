<?php
// Session expired alert script - only show if it's NOT a login success flow
// Don't show if user just completed login successfully
if (isset($_SESSION['session_expired']) && $_SESSION['session_expired'] && 
    (!isset($_SESSION['login_success']) || !$_SESSION['login_success']) &&
    (!isset($_SESSION['redirect_to_dashboard']) || !$_SESSION['redirect_to_dashboard'])): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    Swal.fire({
        title: 'Session Expired!',
        text: 'Your session has expired. Please login again.',
        icon: 'warning',
        confirmButtonText: 'Login Again',
        background: '#ffffff',
        color: '#253475',
        confirmButtonColor: '#253475',
        allowOutsideClick: false,
        allowEscapeKey: false,
        customClass: {
            popup: 'custom-swal-popup',
            title: 'custom-swal-title',
            content: 'custom-swal-content',
            confirmButton: 'custom-confirm-btn'
        }
    });
});
</script>

<style>
/* Custom SweetAlert styles for session expired */
.custom-swal-popup {
    font-family: 'Roboto', sans-serif !important;
    border-radius: 15px !important;
    box-shadow: 0 10px 30px rgba(37, 52, 117, 0.3) !important;
}

.custom-swal-title {
    color: #253475 !important;
    font-weight: 600 !important;
}

.custom-swal-content {
    color: #666 !important;
}

.custom-confirm-btn {
    background-color: #253475 !important;
    border: none !important;
    border-radius: 8px !important;
    font-weight: 500 !important;
}
</style>

<?php 
// Clear the session expired flag
unset($_SESSION['session_expired']); 
endif; ?>
