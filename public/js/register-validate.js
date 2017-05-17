$(document).ready(function() {
    var str = "";



    //
    // FIRST name
    //
    $('#user_first').keyup(function() {
        str = $('#user_first').val();
        if (new RegExp(/^[a-zA-Z]+$/).test(str)) {
            $('#user_first').css({
                "color": ""
            });
        } else {
            $('#user_first').css({
                "color": "red"
            });
        }
    });



    //
    // LAST name
    //
    $('#user_last').keyup(function() {
        str = $('#user_last').val();
        if (new RegExp(/^[a-zA-Z]+$/).test(str)) {
            $('#user_last').css({
                "color": ""
            });
        } else {
            $('#user_last').css({
                "color": "red"
            });
        }
    });



    //
    // email
    //
    $('#user_email').keyup(function() {
        str = $('#user_email').val();
        if (new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/).test(str)) {
            $('#user_email').css({
                "color": ""
            });
        } else {
            $('#user_email').css({
                "color": "red"
            });
        }
    });
});
