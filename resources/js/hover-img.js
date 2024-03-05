$(document).ready(function () {
    $(".img-hover").hover(function () {
        var img = $(this);
        img.animate({
            'width': img.width() * 1.2 + 'px',
            'height': img.height() * 1.2 + 'px'
        }, 200);

    }, function () {
        var img = $(this);
        img.animate({
            'width': img.width() / 1.2 + 'px',
            'height': img.width() / 1.2 + 'px'
        }, 100);
        }
    );
});
