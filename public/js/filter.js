$(document).ready(function() {
    window.filter = "";
    $("#rad1").click(function() {
        filter = "meats";
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
    $("#rad4").click(function() {
        filter = "bread";
        $('#search-2').trigger('keyup');
    });
    $("#rad5").click(function() {
        filter = "poultry";
        $('#search-2').trigger('keyup');
    });
    $("#rad6").click(function() {
        filter = "frozen";
        $('#search-2').trigger('keyup');
    });
    $("#rad7").click(function() {
        filter = "fresh";
        $('#search-2').trigger('keyup');
    });
    $("#rad8").click(function() {
        filter = "packaged";
        $('#search-2').trigger('keyup');
    });
    $("#rad9").click(function() {
        filter = "expires soon";
        $('#search-2').trigger('keyup');
    });
});
