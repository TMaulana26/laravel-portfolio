$(document).ready(function() {
    function typeWriter(element) {
        let text = $(element).text();
        let i = 0;
        const typeSpeed = 25;

        function type() {
            if (i < text.length) {
                $(element).text(function(index, currentText) {
                    return currentText + text.charAt(i);
                });
                i++;
                setTimeout(type, typeSpeed);
            }
        }

        $(element).text('');
        type();
    }

    $('.typing-text').each(function() {
        typeWriter(this);
    });
});
