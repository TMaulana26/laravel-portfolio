    function typeWriter(element) {
        let text = element.textContent; // Get the initial text content
        let i =   0;
        const typeSpeed =   30; // Speed/duration of typing in milliseconds

        function type() {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                setTimeout(type, typeSpeed);
            }
        }

        element.textContent = ''; // Clear the initial text content
        type();
    }

    document.addEventListener('DOMContentLoaded', function() {
        const elements = document.querySelectorAll('.typing-text');
        elements.forEach(element => {
            typeWriter(element);
        });
    });
