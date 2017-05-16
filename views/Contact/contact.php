<?php
/**
 * Contact page view.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Contact Us | Overcooked</title>
    <meta name="description" content="Overcooked: Feed those in need, with your extra food.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/contact/contact.css">

  </head>
  <body>

    <?php

    /** User to check logged in and get user data. */
    $user = new User();

    if ($user->is_logged_in()) {
        View::header_logged_in();
    } else {
        View::header_logged_out();
    }
    ?>

    <!-- Main Content -->
    <section class="main">
       <div class="contact-area container">

         <div class="row">
           <div class="col-sm-6 col-sm-offset-3" id="contact-form-header">
             <h3 class="center" id="contact-page-title">
               <span class="ss-icon" style="position: relative; top: 3px; right: 1px;">mail</span>
               Contact Us
             </h3>
           </div>
         </div>

         <div class="row">
           <div class="col-sm-6 col-sm-offset-3" id="contact-info-form">
          <form name="contactform" method="post" action="forms/contact.php">
                      <input  type="text" name="first_name" class="form-control" placeholder="First Name" maxlength="50" size="30">
                      <hr>
                      <input  type="text" name="last_name" class="form-control" placeholder="Last Name" maxlength="50" size="30">
                      <hr>
                      <input  type="text" name="email" class="form-control" placeholder="Email" maxlength="80" size="30">
                      <hr>
                      <input  type="text" name="telephone" class="form-control" placeholder="Phone Number" maxlength="30" size="30">
                      <hr>
                      <textarea  name="comments" class="form-control" placeholder="Message" maxlength="1000" cols="25" rows="6"></textarea>
                      <hr>
                      <input type="submit" class="btn btn-default contact-btn" id="contact-btn" value="Submit">
          </form>
        </div>
      </div>
       </div>
    </section>

    <!-- Footer Section -->
    <?php View::footer(); ?>
    
  </body>
</html>
