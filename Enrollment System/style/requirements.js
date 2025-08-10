document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const body = document.body;
    
    // Initialize sidebar state on mobile
    if (window.innerWidth <= 885) {
        body.classList.add('collapsed');
    }
    
    // Toggle sidebar when navbar button is clicked
    if (navbarToggler) {
        navbarToggler.addEventListener('click', function() {
            body.classList.toggle('collapsed');
        });
    }
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 885) {
            body.classList.remove('collapsed');
        } else {
            body.classList.add('collapsed');
        }
    });
});
