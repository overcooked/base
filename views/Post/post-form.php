<?php
/**
 * The post form is used to get
 *  the data to create a new post.
 * @author Team Point.
 */

// To hold all errors in the input form.
$errors = null;
$image_error = null;

// If a flash success message exists, print the message.
if(Session::exists('errors')) {
  $errors = Session::flash('errors');
}

// If a flash success message exists, print the message.
if(Session::exists('image_error')) {
  $image_error = Session::flash('image_error');
  if($image_error === '') {
    $image_error = null;
  }
}
?>

<section class="main">
  <div class="container">
    <div class="row">

        <!-- New Post Form -->
        <div class="col-md-6 col-md-offset-1">

          <h3>Create a New Post</h3>
          <hr>

          <form method="POST" enctype="multipart/form-data">

            <!-- Display Input Form Errors -->
            <div class="form-group has-error">
              <?php
              if(isset($errors)) {
                foreach ($errors as $error) {
                  echo '<span class="help-block">* ' . $error . '</span>';
                }
              }

              if(isset($image_error)) {
                echo '<span class="help-block">* ' . $image_error . '</span>';
              }
              ?>
            </div>

            <!-- Title -->
            <div class="form-group">
              <label for="post_title">Title <span class="require">*</span></label>
              <input required="true" type="text" class="form-control" name="post_title" id="post_title" autocomplete="off" placeholder="Ramen, pasta, chicken, etc.." />
            </div>

            <hr>

            <!-- Pickup Location -->
            <div class="form-group">
              <label for="post_pickup_location">Pickup Location <span class="require">*</span></label>
              <input required="true" type="text" class="form-control" name="post_pickup_location" id="post_pickup_location" placeholder="2132 Dominic Ave." />
            </div>

            <hr>

            <!-- Description -->
            <div class="form-group">
              <label for="post_description">Description <span class="require">*</span></label>
              <textarea required="true" rows="5" class="form-control" name="post_description" id="post_description" placeholder="Describe your food."></textarea>
              <!-- TODO: Add Javascript letter counter. -->
            </div>

            <hr>

            <!-- Image Upload -->
            <div class="form-group">
              <label for="post_image">Post Image <span class="require">*</span></label>
              <input required="true" type="hidden" name="MAX_FILE_SIZE" value="9000000"/>
              <input type="file" name="post_image"/>
            </div>

            <hr>

            <!-- Food Tags TODO: ADD VALIDATION SO VALUES AREN'T CHANGED HERE -->
            <div class="form-group">
              <label for="post_tag">Click All That Apply</label>
              <div class="btn-group col-md-12" data-toggle="buttons">

                  <label class="btn btn-default">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Unopened">Unopened
                  </label>

                  <label class="btn btn-default">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Packaged">Packaged
                  </label>

                  <label class="btn btn-default">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Fruits">Fruits
                  </label>

                  <label class="btn btn-default">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Expires Soon">Expires Soon
                  </label>

              </div>
            </div>

            <br>
            <hr>

            <!-- Required Field Reminder -->
            <div class="form-group">
              <p><span class="require">*</span> required fields</p>
            </div>

            <!-- Submit/Cancel Buttons -->
            <div class="form-group">
              <input type="hidden" name="token" value="<?php echo escape(Token::generate()); ?>">
              <button type="submit" value="upload" class="btn btn-primary">Post</button>
              <button class="btn btn-default">Cancel</button>
            </div>
        </form>
      </div>

    </div>
  </div>
</section>
