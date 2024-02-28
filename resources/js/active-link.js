document.addEventListener('DOMContentLoaded', function() {
            // Get all the links in the navbar
            const navLinks = document.querySelectorAll('.nav-link');

            // Get the current URL
            const currentUrl = window.location.pathname;

            // Loop through each link and add the 'active' class if it matches the current URL
            navLinks.forEach(link => {
                if (link.getAttribute('href') === currentUrl) {
                    link.classList.add('bg-gray-700', 'text-black');
                }
            });
        });
