<?php
/**
 * ToS page view.
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
    <link rel="stylesheet" href="/public/css/legal/legal.css">

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_out(); ?>

    <!-- Main Content -->
    <section class="main">
       <div class="container legal-area">
         <h2 class="center">Terms of Service</h2>
         <br>
         <p><span class="legal-bold">WELCOME TO OVERCOOKED©.</span> We hope you find it useful. By accessing our servers, websites, or content therefrom, you agree to these Terms of Service ("TOS"), last updated May 1st, 2017.</p>
         <br><p><span class="legal-bold">LICENSE.</span> If you are 18 or older, we grant you a limited, revocable, nonexclusive, non-assignable, non-sub licensable license to access Overcooked© in compliance with the TOS; unlicensed access is unauthorized. You agree not to license, distribute, make derivative works, display, sell, or "frame" content from Overcooked©, excluding content you create and sharing with friends/family. You grant us a perpetual, irrevocable, unlimited, worldwide, fully paid/sub licensable license to use, copy, perform, display, distribute, and make derivative works from content you post.</p>
         <br><p><span class="legal-bold">USE.</span> You agree not to use or provide software (except for general purpose web browsers and email clients, or software expressly licensed by us) or services that interact or interoperate with Overcooked©, e.g. for downloading, uploading, posting, flagging, emailing, search, or mobile use. Robots, spiders, scripts, scrapers, crawlers, etc. are prohibited, as are misleading, unsolicited, unlawful, and/or spam postings/email. You agree not to collect users' personal and/or contact information.</p>
         <br><p><span class="legal-bold">MODERATION.</span> You agree we may moderate Overcooked© access and use in our sole discretion, e.g. by blocking IP addresses, filtering, deletion, delay, omission, verification, and/or access/account/license termination. You agree:</p>

         <ol class="legal-list">
           <li class="legal-list-item">not to bypass said moderation</li>
           <li class="legal-list-item">we are not liable for moderating, not moderating, or representations as to moderating</li>
           <li class="legal-list-item">nothing we say or do waives our right to moderate, or not. All site rules, e.g. overcooked.ca/restrictions, are incorporated herein.</li>
         </ol>

         <br><p><span class="legal-bold">DISCLAIMER. MANY JURISDICTIONS HAVE LAWS PROTECTING CONSUMERS AND OTHER CONTRACT PARTIES, LIMITING THEIR ABILITY TO WAIVE CERTAIN RIGHTS AND RESPONSIBILITIES. WE RESPECT SUCH LAWS; NOTHING HEREIN SHALL WAIVE RIGHTS OR RESPONSIBILITIES THAT CANNOT BE WAIVED.</span></p>

         <br><p><span class="legal-bold"></span>To the extent permitted by law:</p>
         <ol class="legal-list">
           <li class="legal-list-item">we make no promise as to Overcooked©, its completeness, accuracy, availability, timeliness, propriety, security, or reliability; </li>
           <li class="legal-list-item">your access and use are at your <span class="legal-bold">OWN RISK,</span> and Overcooked© is provided "AS IS" and "AS AVAILABLE";</li>
           <li class="legal-list-item">we are not liable for any harm resulting from:</li>
              <ol class="legal-list">
                <li class="legal-list-item">user content; </li>
                <li class="legal-list-item">user conduct, e.g. illegal conduct; </li>
                <li class="legal-list-item">your OVERCOOKED use;</li>
                <li class="legal-list-item">our representations; </li>
              </ol>
           <li class="legal-list-item">WE AND OUR OFFICERS, DIRECTORS, EMPLOYEES
      ("OVERCOOKED© ENTITIES"), DISCLAIM ALL WARRANTIES &amp;
      CONDITIONS, EXPRESS OR IMPLIED, OF MERCHANTABILITY,
      FITNESS FOR PURPOSE, OR NON-INFRINGEMENT;</li>
           <li class="legal-list-item">OVERCOOKED ENTITIES ARE NOT LIABLE FOR ANY INDIRECT,
      INCIDENTAL, SPECIAL, CONSEQUENTIAL, OR PUNITIVE
      DAMAGES, OR ANY LOSS (E.G. OF PROFIT, REVENUE, DATA, OR
      GOODWILL);</li>
           <li class="legal-list-item">IN NO EVENT SHALL OUR TOTAL LIABILITY EXCEED $100 OR
      WHAT YOU PAID US IN THE PAST YEAR.</li>
         </ol>

         <br><p><span class="legal-bold">CLAIMS.</span> You agree: </p>
             <ol class="legal-list">
               <li class="legal-list-item">any claim, cause of action or dispute ("Claim") arising out of or related to
the TOS or your Overcooked© use is governed by British Columbia ("BC") law regardless of your location or any conflict or choice of law principle; </li>
               <li class="legal-list-item">Claims must be resolved exclusively by state or federal court in Vancouver,
BC (except we may seek injunctive remedy anywhere); </li>
               <li class="legal-list-item">to submit to personal authority of said courts; </li>
               <li class="legal-list-item">any Claim must be filed by 1 year after it arose or be forever barred;</li>
               <li class="legal-list-item">not to bring or take part in a class action against Overcooked© Entities;</li>
               <li class="legal-list-item">(except government agencies) to indemnify Overcooked© Entities for any damage,
loss, and expense (e.g. legal fees) arising from claims related to your Overcooked© use; </li>
               <li class="legal-list-item">you are liable for TOU breaches by affiliates (e.g. marketers) paid by you,
     directly or indirectly (e.g. through an affiliate network); and </li>
               <li class="legal-list-item">to pay us for breaching or inducing others to breach the "USE" section, not
      as a penalty, but as a reasonable estimate of our damages (actual damages
      are often hard to calculate): $0.10 per server request, $1 per post, email,
      flag, or account created, $1 per item of PI collected, and $1000 per software
      distribution, capped at $25,000 per day.</li>
             </ol>

         <br><p><span class="legal-bold">MISC.</span> Users complying with prior written licenses may access Overcooked© thereby until authorization is terminated. Otherwise, this is the exclusive and entire agreement between us. If a TOS term is unenforceable, other terms are unaffected. If TOS translations conflict with the English version, English controls. See Privacy Policy for how we collect, use, and share data. If you feel content infringes your rights see overcooked.ca/about.</p>
         <br><br>
      </div>
    </section>
  </body>
</html>
