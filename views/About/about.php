<?php
/**
 * Logged in page view.
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
            <h4 style="font-family: proximanova-regular; font-size: 16px; color: #a8a8a8; letter-spacing: 0.5px; ">Project Summary</h4>
            <br><br>
          </div>
        </div>
      </div>
      <div class="container" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15); background-color: #fff; border-radius: 3px;">

        <!--  -->
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
              Project Goals and Objective
            </h1>
            <hr style="width: 50px;">
            <p style="font-size: 19px; letter-spacing: 0.3px; padding-left: 20px; padding-right:  20px;">Create an app that allows people to give their extra food to hungry families, students, or anyone who needs it.</p>
          </div>

        </div>

        <br>

        <hr>
        <br><br>

        <!-- Gather Requirements -->
        <div class="row">

          <h2 style="font-family: proximanova-bold; text-align: center;"><span class="ss-icon" style="position: relative; top: 4px; left: -8px; color: #ffc189;">checkclipboard</span> Application Requirements</h2>
          <hr style="width: 50px;">

          <div class="col-md-6" style="padding-left: 30px; padding-right:  30px; margin-top: 7px;">
            <ul class="list-group text-center" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15); border-radius: 3px; font-size: 20px; letter-spacing: 0.3px; text-transform: capitalize;">
              <li style="border: none;" class="list-group-item">Creating a user account</li>
              <li style="border: none; background-color: #f9f8f7;" class="list-group-item">Creating a listing</li>
              <li style="border: none;" class="list-group-item">Contacting other users via peer to peer chat</li>
              <li style="border: none; background-color: #f9f8f7;" class="list-group-item">Using a listing</li>
              <li style="border: none;" class="list-group-item">Customizing your profile</li>
              <li style="border: none; background-color: #f9f8f7;" class="list-group-item">Viewing your past listings</li>
              <li style="border: none;" class="list-group-item">Login / Logout</li>
              <li style="border: none; background-color: #f9f8f7;" class="list-group-item">Administrator permissions</li>
            </ul>
          </div>

          <div class="col-md-6" style="padding-left: 30px; padding-right: 30px; margin-top: 7px;">
            <ul class="list-group text-center" style="box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15); border-radius: 3px; font-size: 20px; letter-spacing: 0.3px; text-transform: capitalize; border: none !important;">
              <li style="border: none;" class="list-group-item">Viewing other users profile pages</li>
              <li style="border: none; background-color: #f9f8f7;" class="list-group-item">Viewing current listings near you</li>
              <li style="border: none;" class="list-group-item">Viewing current listings by tag</li>
              <li style="border: none; background-color: #f9f8f7;" class="list-group-item">Viewing past listings of a user</li>
              <li style="border: none;" class="list-group-item">Viewing past listings by tag</li>
              <li style="border: none; background-color: #f9f8f7;" class="list-group-item">Register for an account</li>
              <li style="border: none;" class="list-group-item">Delete a posting</li>
              <li style="border: none; background-color: #f9f8f7;" class="list-group-item">Change password</li>
            </ul>
          </div>

          <br>
          <br>

        </div>

        <hr>
        <br><br>

        <div class="row">
          <div class="col-md-12 text-center">

            <div class="col-md-4 col-md-offset-4 text-center">
              <h1>
                <span style="font-size: 60px; color: #ffc189" class="ss-icon">departure </span>
                <span style="font-size: 60px; color: #ffc189;" class="ss-icon"> arrival</span>
              </h1>
              <div style="height: 10px;"></div>
              <h1 style="font-family: proximanova-bold; text-transform: uppercase; font-size: 47px; letter-spacing: 2px;">Deliverables</h1>
              <hr style="width: 50px;">
              <br>
            </div>

            <div class="col-md-6">
              <div class="list-group">
                <a href="#" class="list-group-item" style="border: none; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
                  <hr style="width: 50px;">
                  <h4 class="list-group-item-heading" style="letter-spacing: 0.5px; font-size: 20px; padding-left: 10px; padding-right: 10px;">A working web application where users can post/take extra food.</h4>
                  <hr style="width: 50px;">
                </a>
              </div>
            </div>

            <div class="col-md-6">
              <div class="list-group">
                <a href="#" class="list-group-item" style="border: none; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
                  <hr style="width: 50px;">
                  <h4 class="list-group-item-heading" style="letter-spacing: 0.5px; font-size: 20px; padding-left: 10px; padding-right: 10px;">Users can view posts in their area, and view any other posts from past users or themselves. </h4>
                  <hr style="width: 50px;">
                </a>
              </div>
            </div>

            <div class="col-md-6">
              <div class="list-group">
                <a href="#" class="list-group-item" style="border: none; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
                  <hr style="width: 50px;">
                  <h4 class="list-group-item-heading" style="letter-spacing: 0.5px; font-size: 20px; padding-left: 10px; padding-right: 10px;">Safe and functional database system to maintain users data safely and in a secure manner.</h4>
                  <hr style="width: 50px;">
                </a>
              </div>
            </div>

            <div class="col-md-6">
              <div class="list-group">
                <a href="#" class="list-group-item" style="border: none; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.15);">
                  <hr style="width: 50px;">
                  <h4 class="list-group-item-heading" style="letter-spacing: 0.5px; font-size: 20px; padding-left: 10px; padding-right: 10px;">Working peer to peer chat system, allowing posters and consumers to contact each other directly.</h4>
                  <hr style="width: 50px;">
                </a>
              </div>
            </div>

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

          <div class="col-md-6">
            <h1 style="padding-left: 13px; padding-top: 15px; font-size: 64px; font-family: proximanova-bold; letter-spacing: 5px;">
              <br>
              THE END.
            </h1>
          </div>

        </div>

        <br>
        <hr>

      </div>
      <br><br><br>
    </section>

  </body>
</html>
