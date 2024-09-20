    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const navbarToggler = document.querySelector(".navbar-toggler");
    
            // Toggle navbar collapse
            navbarToggler.addEventListener("click", function() {
                this.classList.toggle("collapsed");
            });
    
            // Toggle search box visibility
            document.querySelector('.search-toggle').addEventListener('click', function(event) {
                event.preventDefault();
                const navItem = this.closest('.nav-item');
    
                if (navItem.classList.contains('active')) {
                    navItem.classList.remove('active'); 
                } else {
                    navItem.classList.add('active'); 
                }
            });
    
            // Hide search box when cancel button is clicked
            const cancelBtn = document.querySelector('.custom-search-cancel');
            cancelBtn.addEventListener('click', function() {
                const navItem = this.closest('.nav-item');
                navItem.classList.remove('active');
            });
        });
    </script>
    
