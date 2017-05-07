<?php
/**
 * About page view.
 * @author Team Point.
 */

/** User to check logged in and get user data. */
$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- General. -->
    <title>About Us | Overcooked</title>
    <meta name="description" content="Overcooked: Feed those in need, with your extra food.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <style media="screen">
        ::-webkit-scrollbar {
            display: none;
        }
        .grid-divider {
          position: relative;
          padding: 0;
        }
        .grid-divider>[class*='col-'] {
            position: static;
        }
        .grid-divider>[class*='col-']:nth-child(n+2):before {
            content: "";
            border-left: 1px solid #DDD;
            position: absolute;
            top: 0;
            bottom: 0;
        }
        .col-padding {
            padding: 15px 5px;
            padding-left: 40px;
        }
    </style>

  </head>
  <body>

    <!-- Header Section -->
    <?php View::header_logged_out(); ?>

    <!-- Main Content -->
    <section class="main" style="margin-top: -32px; background-color: #f9f8f7;">
      <div class="container">
        <!-- Meet The Team Header. -->
        <div class="row">
          <div class="col-md-12 text-center">

            <h1 style="font-size: 64px; font-family: proximanova-bold; letter-spacing: 5px;">
              <br>
              MEET THE TEAM
            </h1>
            <span style="text-align: center; font-family: proximanova-bold; font-size: 22px; position: relative; top: -13px; color: #ffc189;"> _ </span>
            <h4 style="font-family: proximanova-regular; font-size: 16px; color: #a8a8a8; letter-spacing: 0.5px; ">Who is behind Overcooked?</h4>
            <br><br>
          </div>
        </div>
      </div>
      <div class="container" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15); background-color: #fff; border-radius: 3px;">

        <!-- The main logo and group number -->
        <div class="row">
          <br>
          <div class="col-md-3 col-md-offset-2">

            <br><br><br><br><br><br>
            <h3 style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); background-color: #333; color: #fff; text-align: center; border-radius: 500px; font-size: 52px; padding-top: 20px; padding-left: 47px; padding-right: 45px; padding-bottom: 64px; font-family: proximanova-bold;">
              <br>
              Team <span style="font-family: proximanova-light;color: #ffc189; text-align: center;">Point.</span>
            </h3>

            <br>
            <br>
            <h3 style="color: #a9a9a9; letter-spacing: 4px; text-align: center; border-radius: 7px; padding: 21px; font-family: proximanova-bold; font-style: italic; background-color: #f3f3f3;">GROUP TWO</h3>

          </div>

          <div class="col-md-5" style="margin-left: 40px;">

            <br>

            <!-- PK -->
            <div class="panel panel-default" style="border: none; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
              <div class="panel-heading" style="color: #545454; font-size: 18px; border:none; padding-top: 14px; font-family: proximanova-bold; text-transform: uppercase; background-color: #f9f8f7;">Piyotr Kao</div>
              <div class="panel-body" style="font-size: 15px;">
                Front-end Development, UI/UX Mockups, and Wire-frame Designer.
              </div>
            </div>

            <!-- MAC -->
            <div class="panel panel-default" style="border: none; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
              <div class="panel-heading" style="color: #545454; font-size: 18px; border:none; padding-top: 14px; font-family: proximanova-bold; text-transform: uppercase; background-color: #f9f8f7;">Mackenzie Craig</div>
              <div class="panel-body" style="font-size: 15px;">
                Version Control Manager, Front-end Development, and Logistics.
              </div>
            </div>

            <!-- DOM -->
            <div class="panel panel-default" style="border: none; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
              <div class="panel-heading" style="color: #545454; font-size: 18px; border:none; padding-top: 14px; font-family: proximanova-bold; text-transform: uppercase; background-color: #f9f8f7;">Dominic Tan</div>
              <div class="panel-body" style="font-size: 15px;">
                Idea/Feature Creation, and Database Designer/DBMS Manager.
              </div>
            </div>

            <!-- SNOW -->
            <div class="panel panel-default" style="border: none; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
              <div class="panel-heading" style="color: #545454; font-size: 18px; border:none; padding-top: 14px; font-family: proximanova-bold; text-transform: uppercase; background-color: #f9f8f7;">David Perez</div>
              <div class="panel-body" style="font-size: 15px;">
                Algorithm/Mathematics, DEVOPS, and Documentation.
              </div>
            </div>

            <!-- JUSTIN -->
            <div class="panel panel-default" style="border: none; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);">
              <div class="panel-heading" style="color: #545454; font-size: 18px; border:none; padding-top: 14px; font-family: proximanova-bold; text-transform: uppercase; background-color: #f9f8f7;">Justin Leung</div>
              <div class="panel-body" style="font-size: 15px;">
                Back-end Development, Code Style Control, and Database Designer.
              </div>
            </div>

          </div>
        </div>

        <hr>
        <br><br>

        <!-- Problem Statement & Project Goals & Objective  -->
        <div class="row text-center">

          <div class="col-md-6">
            <h1><span class="ss-icon" style="font-size: 46px;">gridlines</span><br>
              <div style="height: 10px;"></div>
              Problem Statement
            </h1>
            <hr style="width: 50px;">
            <p style="font-size: 19px; letter-spacing: 0.3px; padding-left: 20px; padding-right:  20px;">Some people want to reduce their food waste, while also giving back in their community. Currently this is not possible.</p>
          </div>

          <div class="col-md-6">
            <h1><span class="ss-icon" style="font-size: 46px;">flag</span><br>
              <div style="height: 10px;"></div>
              Project Goals and Objectives
            </h1>
            <hr style="width: 50px;">
            <p style="font-size: 19px; letter-spacing: 0.3px; padding-left: 20px; padding-right:  20px;">Create an app that allows people to give their extra food to hungry families, students, or anyone who needs it.</p>
          </div>

        </div>

        <br>
        <hr>
        <br>

        <!-- Success Criteria & Risks -->
        <div class="row">

          <!-- Success Criteria -->
          <div class="col-md-6">

            <div class="page-header text-center" style="margin-top: 52px;">
                <h1 style="font-family: proximanova-light; color: #555; letter-spacing: 1.3px; text-transform: uppercase;">Success Criteria</h1>
                <hr style="width: 50px; border-color: #f1faf0;">
            </div>

            <div class="row grid-divider">

              <div class="col-sm-5" style="margin-left: 33px;">
                <div class="col-padding">
                  <h3>Front End</h3>
                  <hr style="width: 50px; position: relative; right: 60px; margin-top: 14px;">
                  <p style="font-size: 17px;">Our web application can handle all of the features listed under Requirements, and perform consistently without error.</p>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="col-padding">
                  <h3>Back End</h3>
                  <hr style="width: 50px; position: relative; right: 84px; margin-top: 14px;">
                  <p style="font-size: 17px;">Our backend and database are secure and safe. This includes hashing and salting all storage and transmission of passwords to protect users.</p>
                </div>
              </div>

            </div>

          </div>

          <!-- Risks -->
          <div class="col-md-6">

            <div class="page-header text-center">
                <h1 style="font-size: 47px; letter-spacing: 1.3px; font-family: proximanova-black; text-transform: uppercase;">RISKS</h1>
                <hr style="width: 50px;">
            </div>

            <div class="row grid-divider">

              <div class="col-sm-5" style="margin-left: 35px;">
                <div class="col-padding">
                  <h3>Legal</h3>
                  <hr style="width: 50px; position: relative; right: 62px; margin-top: 14px;">
                  <p style="font-size: 17px;">Similar to Craigslist, our service involves people meeting up in real life. This comes with the inherent risk of violence and or scamming in person.</p>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="col-padding">
                  <h3>Quality</h3>
                  <hr style="width: 50px; position: relative; right: 83px; margin-top: 14px;">
                  <p style="font-size: 17px;">Food quality can also be low. To reduce this risk, we plan to include guidelines on how to post food, as well as how to judge if food is safe to pickup/eat.</p>
                </div>
              </div>

            </div>

          </div>

        </div>

        <br>
        <hr>
        <br>

        <div class="row">

          <div class="col-md-3 col-md-offset-3">
            <span class="text-center">
              <h3 style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); background-color: #333; color: #fff; text-align: center; border-radius: 500px; font-size: 52px; padding-top: 20px; padding-left: 47px; padding-right: 45px; padding-bottom: 64px; font-family: proximanova-bold;">
                <br>
                Team <span style="font-family: proximanova-light;color: #ffc189; text-align: center;">Point.</span>
              </h3>
            </span>
          </div>

        </div>

        <br>
        <hr>

      </div>
      <br><br><br>
    </section>

  </body>
</html>
