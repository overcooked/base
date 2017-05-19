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
if (Session::exists('errors')) {
    $errors = Session::flash('errors');
}

// If a flash success message exists, print the message.
if (Session::exists('image_error')) {
    $image_error = Session::flash('image_error');
    if ($image_error === '') {
        $image_error = null;
    }
}
?>

<section class="main">
  <div class="container">

    <!-- New Post Header -->
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3" id="post-form-header">
        <h3 id="new-post-title">Create a New Listing</h3>
      </div>
    </div>

    <!-- New Post Form -->
    <div class="row">

      <div class="col-sm-6 col-sm-offset-3" id="post-form">

          <form method="POST" enctype="multipart/form-data">

            <!-- Display Input Form Errors -->
            <div class="form-group has-error">
              <?php
              if (isset($errors)) {
                  foreach ($errors as $error) {
                      echo '<span class="help-block">* ' . $error . '</span>';
                  }
              }

              if (isset($image_error)) {
                  echo '<span class="help-block">* ' . $image_error . '</span>';
              }
              ?>
            </div>

            <!-- Title -->
            <div class="form-group">
              <label for="post_title">Title <span class="require">*</span></label>
              <input required="true" tabindex="0" type="text" class="form-control post_input" name="post_title" id="post_title" autocomplete="off" placeholder="Ramen, pasta, chicken, etc.." />
            </div>
            <hr>

            <!-- Pickup Location -->
            <div class="form-group">
              <label for="post_pickup_location">Pickup Location <span class="require">*</span></label>
              <input required="true" tabindex="0" type="text" class="form-control post_input" name="post_pickup_location" id="post_pickup_location" placeholder="2132 Dominic Ave." />
            </div>
            <hr>

            <!-- Description -->
            <div class="form-group">
              <label for="post_description">Description <span class="require">*</span></label>
              <textarea required="true" tabindex="0" rows="5" class="form-control post_input" name="post_description" id="post_description" placeholder="Describe your food."></textarea>
            </div>
            <hr>

            <!-- Image Upload -->
            <div class="form-group">
              <label for="post_image">Post Image <span class="require">*</span></label>
              <label class="btn btn-default btn-file">
                  <span class="ss-icon" style="position: relative; top: 2px; right: 2px;">upload</span> Upload Image
                  <input class="form-control post_input" type="file" name="post_image" id="post_image" required="true" accept="image/jpeg,image/x-png,image/png,/image/jpg"/>
              </label>
            </div>

            <!-- Changes the name of the post image upload form when image is selected
            <script type="text/javascript">
            $(document).on('change', ':file', function() {
              var input = $(this),
                  numFiles = input.get(0).files ? input.get(0).files.length : 1,
                  label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
              input.trigger('fileselect', [numFiles, label]);
            });
            $(document).ready( function() {
                $(':file').on('fileselect', function(event, numFiles, label) {
                    $('.btn-file').text(label);
                });
            });
            </script>
             -->

            <hr>

            <!-- Food Tags TODO: ADD VALIDATION SO VALUES AREN'T CHANGED HERE -->
            <div class="form-group">
              <label for="post_tag" style="padding-bottom: 5px;">Select All That Apply</label>
              <br>
              <div class="btn-group col-md-12" data-toggle="buttons">

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Fresh">Fresh
                  </label>

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Packaged">Packaged
                  </label>

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Fruits">Fruits
                  </label>

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Expires Soon">Expires Soon
                  </label>

                  <!-- NEW -->

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Opened">Opened
                  </label>

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Closed">Closed
                  </label>

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Frozen">Frozen
                  </label>

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Breads">Bread
                  </label>

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Meats">Meat
                  </label>

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Poultry">Poultry
                  </label>

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Wheat">Wheat
                  </label>

                  <label class="btn btn-default post-tags">
                      <input type="checkbox" name="post_tag" id="post_tag" value="Vegetables">Vegetables
                  </label>

              </div>
            </div>

            <br class="hidden-xs"><br class="hidden-xs">
            <hr>

            <!-- Required Field Reminder -->
            <div class="form-group">
              <p><span class="require">*</span> required fields</p>
            </div>

            <!-- Submit/Cancel Buttons -->
            <div class="form-group">
              <input type="hidden" name="token" value="<?php echo escape(Token::generate()); ?>">
              <button type="submit" value="upload" id="post-btn" class="btn btn-primary">Create Listing</button>
            </div>
            <p class="disclaimer text-center">
              By posting, you agree to our
              <a href="/tos.php">Terms and Services</a>
            </p>
        </form>

      </div>
    </div>
  </div>
</section>

<!-- Footer Section -->
<?php View::footer(); ?>
