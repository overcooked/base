// Prepare posting page for onload.
$(document).ready(function() {
    var $root = $('html, body');
    $(document).on('click', 'a.move-link', function(event) {
        event.preventDefault();
        $root.animate({
            scrollTop: $($.attr(this, 'href')).offset().top - 300
        }, 1200, 'swing');
    });
});
