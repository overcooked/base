// Prepare posting page for onload.
$(document).ready(function() {
    var $root = $('html, body');
    $(document).on('click', 'a.move-link', function(event) {
        event.preventDefault();

        var offset = 300;
        if(isMobile()) {
          offset = 45;
        }
        $root.animate({
            scrollTop: $($.attr(this, 'href')).offset().top - offset
        }, 1200, 'swing');
    });

    function isMobile() {
      try { document.createEvent("TouchEvent"); return true; }
      catch(e){ return false; }
    }
});
