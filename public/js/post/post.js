// Prepare posting page for onload.
$( document ).ready(function() {
});

/**
 * Controls the helper dialog on the
 * post page by calculating pixel height.
 * @return void
 */
(function() {
  $(document).on("click", ":focus", function() {

    // Ignore the search input on the header bar.
    if(this.id !== "header-search-input") {

      // Distance from top - post title y coordinate.
      var main = $("#new-post-title").offset().top;
      var description = $("#" + this.id).offset().top;
      var padding = (description - main - 17);

      // Save the id into a variable.
      var title = this.id;

      /* Helper texts/description. */
      // Change the title text.
      $("#help-title").fadeOut(function() {

        /* Helper texts/description. */
        // Title.
        if(title === "post_title") {
          $("#help-title").html("Title Is <span class='font-black text-uppercase'>Everything</span>").fadeIn();
          return;
        }

        // Location.
        if (title === "post_pickup_location") {
          $("#help-title").html("Do I Meetup <span class='font-bold h4'>OR</span> Pickup?").fadeIn();
          return;
        }

        // Title Description.
        if (title === "post_description") {
          $("#help-title").html("Description").fadeIn();
          return;
        }

        // Image Upload.
        if (title === "post_image") {
          $("#help-title").html("Post Image").fadeIn();
          id="help-text"
          return;
        }

      });

      // Change the body text.
      $("#help-text").fadeOut(function() {

        /* Helper texts/description. */
        // Title.
        if(title === "post_title") {
          $("#help-text").html(
            "The title is the most important part of the post. Make sure it explains clearly what food you're giving away. Typically people decide after the title."
          ).fadeIn();
          return;
        }

        // Location.
        if (title === "post_pickup_location") {
          $("#help-text").html("Tell everyone the location of where you want to meet-up, or have the food be picked up. You can also choose the <kbd>decide later option.</kbd>").fadeIn();
          return;
        }

        // Title Description.
        if (title === "post_description") {
          $("#help-text").html("Description").fadeIn();
          return;
        }

        // Image Upload.
        if (title === "post_image") {
          $("#help-text").html("Post Image").fadeIn();
          return;
        }

      });

      // Add margin and smoothly push it up/down.
      $("#help-block").animate({marginTop: padding + "px"}, 770);
    }

  })
})();
