<?php
/**
 * Inbox View.
 * @author Team Point.
 */

$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Messages | Overcooked.ca</title>
    <meta name="description" content="Overcooked lets you give your extra food to people who really need it.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/messages/messages.css">

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_in(); ?>

    <!-- Messaging // Start -->
    <section class="main">
      <div class="container message-area">

        <!-- Message Header Area -->
        <div class="row">
          <div class="col-sm-12">

            <h3>Recent Messages</h3>

          </div>
        </div>

        <hr>

        <!-- Recent Messages -->
        <div class="row">
          <div class="col-sm-12">

          </div>
        </div>

        <hr>

        <!-- Message Form Area -->
        <div class="row">
          <div class="col-sm-12" id="message-form">

            <!-- Message Form -->
            <form method="post">

              <!-- Message Send -->
              <div class="input-group" id="message-input-group">
                <textarea name="name" class="form-control" id="message-input" placeholder="Type a message..." rows="1"></textarea>
                <input type="submit" class="btn btn-default" id="send-message-btn" name="submit" value="Send">
              </div>

              <!-- Submit Buttons -->
              <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            </form>
          </div>
        </div>

      </div>
    </section>

    <?php require_once (getcwd() . "/views/Template/responsive-footer-nav.php"); ?>

  </body>
</html>
