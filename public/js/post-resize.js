/**
 * Script to set all posts to the height of
 * the post with the largest height.
 * @author Team Point.
 * TODO: Remove this in future versions, will not be used.
 */

function resize() {
    var largest = 0;

    $(".post").each(function() {
        var findHeight = $(this).height();
        if (findHeight > largest) {
            largest = findHeight;
        }
    });

    $(".post").css({
        "height": largest + "px"
    });
}
