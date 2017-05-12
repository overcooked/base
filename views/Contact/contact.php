<?php
/**
 * Contact page view.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();
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

    <!-- Header Section -->
    <?php View::header_logged_out(); ?>

    <!-- Main Content -->
    <section class="main">
       <div class="contact-area container">
         <h2 class="center">Contact Us</h2>
         <hr />
          <form name="contactform" method="post" action="forms/contact.php">
             <table width="450px">
                <tr>
                   <td valign="top">
                      <input  type="text" name="first_name" class="form-control" placeholder="First Name" maxlength="50" size="30">
                   </td>
                </tr>
                <tr>
                   <td valign="top">
                      <input  type="text" name="last_name" class="form-control" placeholder="Last Name" maxlength="50" size="30">
                   </td>
                </tr>
                <tr>
                   <td valign="top">
                      <input  type="text" name="email" class="form-control" placeholder="Email" maxlength="80" size="30">
                   </td>
                </tr>
                <tr>
                   <td valign="top">
                      <input  type="text" name="telephone" class="form-control" placeholder="Phone Number" maxlength="30" size="30">
                   </td>
                </tr>
                <tr>
                   <td valign="top">
                      <textarea  name="comments" class="form-control" placeholder="Message" maxlength="1000" cols="25" rows="6"></textarea>
                   </td>
                </tr>
                <tr>
                   <td colspan="2" style="text-align: left;">
                      <input type="submit" class="contact-submit btn btn-default" value="Submit">
                   </td>
                </tr>
             </table>
          </form>
       </div>
    </section>
  </body>
</html>
