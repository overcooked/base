// Prepare posting page for onload.
$(document).ready(function() {

  var post_title_max = 50;
  var post_pickup_max = 80;
  var post_description_max = 500;

  /* Checks the amount of letters typed for the title form. */
  $('#post_title').keyup( function(event) {

      // Check if the title is over the limit.
      if($(this).val().length >= post_title_max) {

        // Set text to limit, and text colour red.
        $("#title-count").css("color", "#d67979");
        $('#title-counter').text(post_title_max);
      } else {
        var cs = $(this).val().length;
        $('#title-counter').text(cs);
        $("#title-count").css("color", "#d7dade");
      }

    }
  ).keydown( function(event){
    if(event.keyCode == 9 || event.keyCode == 46 || event.keyCode == 8) {
      return true;
    } else if($(this).val().length >= post_title_max) {
      return false;
    } else {
      return true;
    }
  });

  /* Checks the amount of letters typed for the description form. */
  $('#post_description').keyup( function(event) {

      // Check if the title is over the limit.
      if($(this).val().length >= post_description_max) {

        // Set text to limit, and text colour red.
        $("#description-count").css("color", "#d67979");
        $('#description-counter').text(post_description_max);
      } else {
        var cs = $(this).val().length;
        $('#description-counter').text(cs);
        $("#description-count").css("color", "#d7dade");
      }

    }
  ).keydown( function(event){
    if(event.keyCode == 9 || event.keyCode == 46 || event.keyCode == 8) {
      return true;
    } else if($(this).val().length >= post_description_max) {
      return false;
    } else {
      return true;
    }
  });

  /* Checks the amount of letters typed for the pickup form. */
  $('#post_pickup_location').keyup( function(event) {

      // Check if the title is over the limit.
      if($(this).val().length >= post_pickup_max) {

        // Set text to limit, and text colour red.
        $("#pickup-count").css("color", "#d67979");
        $('#pickup-counter').text(post_pickup_max);
      } else {
        var cs = $(this).val().length;
        $('#pickup-counter').text(cs);
        $("#pickup-count").css("color", "#d7dade");
      }

    }
  ).keydown( function(event){
    if(event.keyCode == 9 || event.keyCode == 46 || event.keyCode == 8) {
      return true;
    } else if($(this).val().length >= post_pickup_max) {
      return false;
    } else {
      return true;
    }
  });

});
