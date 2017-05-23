$(document).ready(function() {
    window.filter = "";
    $("#rad1").click(function() {
        filter = "meats";
        $('#search-2').trigger('keyup');
        setTimeout(function() {
            msnry.layout();
        }, 1000);
    });
    $("#rad2").click(function() {
        filter = "vegetables";
        $('#search-2').trigger('keyup');
        setTimeout(function() {
            msnry.layout();
        }, 1000);
    });
    $("#rad3").click(function() {
        filter = "fruit";
        $('#search-2').trigger('keyup');
        setTimeout(function() {
            msnry.layout();
        }, 1000);
    });
});
