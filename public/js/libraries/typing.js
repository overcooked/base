/* Typing.js - animates typing effect.
* Author: Lihui
* Websitte: withlihui.com
* Github: github.com/lihuii/typing.js
* MIT licesned.
*/

var b = 0;
var c = 0;
var isTyping = true;
var isLoop = true;
var isPlaceholder = false;
var exists_text = false;
var i = 0;
var typingSpeed = 100;
var deleteSpeed = 40;
var waitTime = 1000;

setTimeout("typing()", waitTime);

function typing() {

  if (isPlaceholder == true) {
    document.getElementById("header-search-input").placeholder = strings[i].substring(c, b);
  } else if(exists_text) {
    exists_text = false;
  } else {
    document.getElementById("home-type-text").innerHTML = strings[i].substring(c, b);
  }

  // If the whole string has been printed, move to the next. (Printed a string)
	if (b == strings[i].length) {
    //
	  setTimeout("b=0, c=strings[i].length, isTyping=true", waitTime);
	} else {
    // Check if last was printed, if so, delete the string.
    // If c doesn't equal 0.
		if (c != 0) {

      // Move down by one, save i to be the final string, and if loop is no.
			c--;
			if ((i == strings.length-1) && (isLoop==false)) {
				return;
			}

      // If c is 0, move onto the next string.
			if (c == 0) {
				i++;
				if (i == strings.length) {
					i = 0;
				}
			}

		} else {
			var isTyping = false;
			b++;
		}
	}

	if (isTyping == false) {
		setTimeout("typing()", typingSpeed);
	} else {
		setTimeout("typing()", deleteSpeed);
	}
}
