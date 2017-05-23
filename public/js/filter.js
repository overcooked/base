$(document).ready(function() {
    window.filter = "";
    $("#rad1").click(function() {
        filter = "vafa";
        $('#search-2').trigger('keyup');
    });
    $("#rad2").click(function() {
        filter = "chicken";
        $('#search-2').trigger('keyup');
    });
    $("#rad3").click(function() {
        filter = "tasty";
        $('#search-2').trigger('keyup');
    });
});
