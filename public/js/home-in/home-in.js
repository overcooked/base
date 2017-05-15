/**
 * The JQuery/JS File for the logged in
 * home page of the website.
 * @author Team Point.
 */
$(document).ready(function() {

  /* Watch for when main search is focused. */
  $('#main-search-input').on("focus", function(){
    console.log('Input');
  });

  /* Watch for when the main search isn't unselected */
  $('#main-search-input').focusout(function() {
    console.log('Unfocused');
  });

});
