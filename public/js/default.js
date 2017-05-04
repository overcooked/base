// Prepare posting page for onload.
$( document ).ready(function() {

  // Get the header search bar placeholder value.
  var title = $("#header-search-input").attr("placeholder");

  // Calculate interval time.
  var interval = 200;
  var wait = interval + (interval * title.length);

  $.each(title.split(''), function (i, letter) {
      setTimeout(function () {
          $('#header-search-input').html($('#header-search-input').html() + letter);
      }, interval * i);
  });

  var i = title.length;

  while(i >= 0){
      setTimeout(function () {
          var text = $('.form-title').html();
          var length = text.length - 1;
          $('.form-title').html(text.substring(0, length));
      }, wait + (interval * i) );
      i--;
  }
});
