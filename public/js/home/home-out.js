/**
 * Javascript for the logged in view.
 * @author Team Point.
 */
$(document).ready(function(){

  /* Moves the arrow. */
  function loop() {
    $('#moving-arrow').animate({'top': '37'}, {
      duration: 450,
      complete: function() {
          $('#moving-arrow').animate({top: 41}, {
              duration: 450,
              complete: loop});
    }});
  }
  loop();

  function formatNumber(number) {
      number = number.toFixed(0) + '';
      x = number.split('.');
      x1 = x[0];
      x2 = x.length > 1 ? '.' + x[1] : '';
      var rgx = /(\d+)(\d{3})/;
      while (rgx.test(x1)) {
          x1 = x1.replace(rgx, '$1' + ',' + '$2');
      }
      return x1 + x2;
  }

  /* Get Current Day Number. */
  var now = new Date();
  var start = new Date(now.getFullYear(), 0, 0);
  var diff = now - start;
  var oneDay = 1000 * 60 * 60 * 24;
  var day = Math.floor(diff / oneDay);
  var secs = now.getSeconds() + (60 * now.getMinutes()) + (60 * 60 * now.getHours());
  var total_seconds = (day * 86400) + secs;
  var total_kg_wasted = (total_seconds * 3.16231532).toFixed(0);
  $("#wasted-food-count").text(total_kg_wasted);
  $("#stats").fadeIn(1300);

  /* Update Wasted Food Value */
  setInterval(function(){
    total_kg_wasted++;
    $("#wasted-food-count").text(formatNumber(total_kg_wasted));
  }, 333);


});
