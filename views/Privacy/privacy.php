<?php
/**
 * Privacy policy page view.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>Privacy | Overcooked</title>
    <meta name="description" content="Overcooked: Feed those in need, with your extra food.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/legal/legal.css">

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
       <div class="container legal-area">
         <h2 class="center">Privacy Policy</h2>
         <br>
         <p>This policy details how data about you is used when you access our websites and services or interact with us. If we update it, we will revise the date, place notices on Overcooked© if changes are material, and/or obtain your consent as required by law.</p>
         <br>
         <span class="legal-bold">Protecting your privacy</span>
         <ol class="legal-list">
           <li class="legal-list-item">We take precautions to prevent unauthorized access to or misuse of data about you.</li>
           <li class="legal-list-item">We do not share your data with third parties for marketing purposes.</li>
           <li class="legal-list-item">We do not engage in cross-marketing or link-referral programs.</li>
           <li class="legal-list-item">We do not employ tracking devices for marketing purposes.</li>
           <li class="legal-list-item">We do not send you unsolicited communications for marketing purposes.</li>
           <li class="legal-list-item">We do not engage in affiliate marketing (and prohibit it on Overcooked©).</li>
           <li class="legal-list-item">We do provide email proxy &amp; relay services to reduce unwanted email.</li>
           <li class="legal-list-item">Please review privacy policies of any third-party sites linked to from Overcooked©.</li>
         </ol>

         <br>
         <span class="legal-bold">Data we use to provide/improve our services and/or combat fraud/abuse:</span>
         <ol class="legal-list">
           <li class="legal-list-item">Data you post on or send via Overcooked©, and/or send us directly or via other sites.</li>
           <li class="legal-list-item">Data you submit or provide (e.g. name, address, email, phone, fax, photos, tax ID).</li>
           <li class="legal-list-item">Web log data (e.g. web pages viewed, access times, IP address, HTTP headers).</li>
           <li class="legal-list-item">Data collected via cookies (e.g. search data and "favorites" lists).</li>
           <li class="legal-list-item">Data about your device(s) (e.g. screen size, DOM local storage, plugins).</li>
           <li class="legal-list-item">Data from 3rd parties (e.g. phone type, geo-location via IP address).</li>
         </ol>

         <br>
         <span class="legal-bold">Data we store</span>
         <ol class="legal-list">
           <li class="legal-list-item">We retain data as needed for our business purposes and/or as required by law.</li>
           <li class="legal-list-item">We make good faith efforts to store data securely, but can make no guarantees.</li>
           <li class="legal-list-item">You may access and update certain data about you via your account login.</li>
         </ol>

         <br>
         <span class="legal-bold">Circumstances in which we may disclose user data:</span>
         <ol class="legal-list">
           <li class="legal-list-item">to respond to subpoenas, search warrants, court orders, or other legal process.</li>
           <li class="legal-list-item">to protect our rights, property, or safety, or that of users of Overcooked© or the public.</li>
           <li class="legal-list-item">with your consent (e.g. if you authorize us to share data with other users).</li>
           <li class="legal-list-item">about a merger, bankruptcy, or sale/transfer of assets.</li>
           <li class="legal-list-item">in aggregate/summary form, where it cannot reasonably be used to identify you.</li>
         </ol>
         <br>
         <p><span class="legal-bold">International Users</span> - By accessing Overcooked© or providing us data, you agree we may use and disclose data we collect as described here or as communicated to you, transmit it outside your resident authority, and store it on servers in Canada. For more information please contact our privacy officer at privacy@overcooked.ca.</p>


         <hr>

      </div>
    </section>
  </body>
</html>
