<?php
/**
 * The post form is used to get
 *  the data to create a new post.
 * @author Team Point.
 */

// To hold all errors in the input form.
$errors = null;

// If a flash success message exists, print the message.
if(Session::exists('errors')) {
  $errors = Session::flash('errors');
}
?>

<section class="main">
  <div class="container">
    <div class="row">

        <!-- New Post Form -->
        <div class="col-md-8 col-md-offset-2">

          <h3>Create post</h3>

          <hr>

          <form action="" method="POST">

            <!-- Display Input Form Errors -->
            <?php if(isset($errors)) { ?>
              <div class="form-group has-error">
                <?php
                  foreach ($errors as $error) {
                    echo '<span class="help-block">* ' . $error . '</span>';
                  }
                ?>
              </div>
            <?php } ?>

            <!-- Title -->
            <div class="form-group">
              <label for="post_title">Title <span class="require">*</span></label>
              <input type="text" class="form-control" name="post_title" id="post_title" placeholder="Ramen, pasta, chicken, etc.." />
            </div>

            <!-- Pickup Location -->
            <div class="form-group">
              <label for="post_pickup_location">Pickup Location <span class="require">*</span></label>
              <input type="text" class="form-control" name="post_pickup_location" id="post_pickup_location" placeholder="2132 Dominic Ave." />
            </div>

            <!-- Description -->
            <div class="form-group">
              <label for="post_description">Description</label>
              <textarea rows="5" class="form-control" name="post_description" id="post_description" placeholder="Describe your food."></textarea>
              <!-- TODO: Add Javascript letter counter. -->
            </div>

            <!-- Required Field Reminder -->
            <div class="form-group">
              <p><span class="require">*</span> required fields</p>
            </div>

            <!-- Submit/Cancel Buttons -->
            <div class="form-group">
              <input type="hidden" name="token" value="<?php echo escape(Token::generate()); ?>">
              <button type="submit" class="btn btn-primary">Post</button>
              <button class="btn btn-default">Cancel</button>
            </div>
        </form>
      </div>

    </div>
  </div>
</section>
