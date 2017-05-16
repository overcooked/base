$(document).ready(function() {
    var lastentry = "";

    $('#search-2').keyup(function(event) {
        if ($('#search-2').val() != lastentry) {
            lastentry = $('#search-2').val()

            var msnry = new Masonry('.grid', {});

            setInterval(function() {
                msnry.layout();
                console.log("run masonry");
            }, 1000);

            // g - global match
            // i - case insensitive
            // m - multi line
            var ptrn = new RegExp(lastentry, "gim");
            $(".thumbnail").each(function(index) {

                if (ptrn.test($(this).text())) {
                    $(this).show();
                    msnry.layout();
                } else {
                    $(this).hide();
                }
                msnry.layout();
            });
        }
    });
});
