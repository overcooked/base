$(document).ready(function() {
    var $grid = $('.grid').imagesLoaded(function() {
        $grid.masonry({
            itemSelector: '.grid-item',
            transitionDuration: '0',
            columnWidth: '.grid-sizer',
            percentPosition: true
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
                    $(this).addClass("item masonry-brick grid-item");
                } else {
                    $(this).hide();
                    $(this).removeClass("item masonry-brick grid-item");
                }
            } else {
                $(this).hide();
                $(this).removeClass("item masonry-brick grid-item");
            }
        });

        $grid.masonry('layout');
    });
});;
