$(document).ready(function() {
    window.filter = "";
    $("#rad1").click(function() {
        filter = "meat";
        $('#search-2').trigger('keyup');
    });
    $("#rad2").click(function() {
        filter = "vegetables";
        $('#search-2').trigger('keyup');
    });
    $("#rad3").click(function() {
        filter = "fruit";
        $('#search-2').trigger('keyup');
    });
});
