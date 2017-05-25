$(document).ready(function() {
    var $grid = $('.grid').imagesLoaded(function() {
        $grid.masonry({
            transitionDuration: '0'
        });
    });

    var lastentry = "";

    $('#search-2').keyup(function(event) {
        if ($('#search-2').val().toLowerCase() == "food fall") {
            window.location.replace("http://foodfall.ca/game.html");
        }
        if ($('#search-2').val().toLowerCase() == "what is food waste") {
            window.location.replace("/what.php");
        }
        // $('#search-2').val() != lastentry
        lastentry = $('#search-2').val()

        //var msnry = new Masonry('.grid', {
        //    transitionDuration: '0'
        //});



        // g - global match
        // i - case insensitive
        // m - multi line
        var ptrn = new RegExp(lastentry, "gim");
        var fltr = new RegExp(filter, "gim");
        $(".thumbnail").each(function(index) {
            if (ptrn.test($(this).text())) {
                if (fltr.test($(this).text())) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            } else {
                $(this).hide();
            }
            $grid.imagesLoaded().progress(function() {
                $grid.masonry('layout');
            });
        });
        $grid.imagesLoaded().progress(function() {
            $grid.masonry('layout');
        });
    });
});;
