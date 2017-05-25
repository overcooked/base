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
    <title>Welcome, <?php echo escape($user->data()->user_first) ?> | Overcooked</title>
    <meta name="description" content="Overcooked: Feed those in need, with your extra food.">

    <!-- Boiler Plate Tags. -->
    <?php View::head(); ?>

    <!-- Style Files. -->
    <link rel="stylesheet" href="/public/css/home-in/home-in.css">

    <!-- Script Files -->
    <script src="/public/js/masonry.js" type="text/javascript"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="/public/js/search.js" type="text/javascript"></script>
    <script src="/public/js/filter.js" type="text/javascript"></script>

  </head>
  <body>

    <div class="stripe" id="stripe-one"></div>
    <div class="stripe" id="stripe-two"></div>
    <div class="stripe" id="stripe-three"></div>
    <div class="stripe" id="stripe-four"></div>
    <div class="stripe" id="stripe-five"></div>
    <div class="stripe" id="stripe-six"></div>

    <?php
    $user = new User();

    // Get the link to a users profile.
    $user_profile_url = '/profile.php?user=' . substr($user->data()->user_id, 5);
    ?>
    <nav class="navbar navbar-default" role="navigation">
    	<div class="container">

    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
    			<button class="navbar-toggle toggle-menu menu-right push-body pull-right" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
    				<span class="sr-only">Toggle navigation</span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    				<span class="icon-bar"></span>
    			</button>

    			<!-- Navigation Bar Logo -->
          <a class="navbar-brand hidden-xs" href="/index.php">
            <img class="img-responsive" id="header-logo" src="/public/assets/images/overcooked-logo-logged-in.svg" style="border:none;" alt="Overcooked Logo">
          </a>

    			<!-- Navigation Bar Logo -->
          <a class="visible-xs" href="/index.php">
            <img class="img-responsive" id="header-icon" src="/public/assets/images/overcooked-icon.svg" alt="Overcooked Logo">
          </a>

    		</div>

    		<!-- Collapsable navbar and regular nav items. -->
    		<div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="bs-example-navbar-collapse-1">

    			<!-- Side bar menu items -->
    			<ul class="nav navbar-nav visible-xs">

    				<li>
    					<button class="navbar-toggle toggle-menu menu-right push-body pull-right" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
    						<span class="sr-only">Toggle navigation</span>
    						<span class="icon-bar top-bar"></span>
    						<span class="icon-bar middle-bar"></span>
    						<span class="icon-bar bottom-bar"></span>
    					</button>
    				</li>

    				<li>
    					<img src="https://static1.squarespace.com/static/56ba4348b09f95db7f71a726/t/58d7f267ff7c50b172895560/1490547315597/justin.jpg" id="side-bar-profile-image" alt="Profile Image">
    					<p id="side-bar-name"><?php echo escape($user->data()->user_first) . ' ' . escape($user->data()->user_last); ?></p>
    					<a href="<?php echo escape($user_profile_url); ?>" id="side-bar-profile">view profile</a>
    				</li>

    				<li>
    					<a href="post.php" class="side-bar-link">
    						<span class="ss-icon">compose</span>
    						<span class="side-bar-link-text">NEW LISTING</span>
    					</a>
    				</li>

    				<li>
    					<a href="update.php" class="side-bar-link">
    						<span class="ss-icon">userfile</span>
    						<span class="side-bar-link-text">EDIT PROFILE</span>
    					</a>
    				</li>

    				<li>
    					<a href="changepassword.php" class="side-bar-link">
    						<span class="ss-icon">lock</span>
    						<span class="side-bar-link-text">CHANGE PASSWORD</span>
    					</a>
    				</li>

    				<li>
    					<a href="contact.php" class="side-bar-link">
    						<span class="ss-icon">send</span>
    						<span class="side-bar-link-text">CONTACT US</span>
    					</a>
    				</li>

    				<hr>

    				<li>
    					<a href="logout.php" id="side-bar-logout">
    						<span class="side-bar-link-text">LOGOUT</span>
    					</a>
    				</li>

    			</ul>

    			<!-- Large view items -->
    			<ul class="nav navbar-nav navbar-right hidden-xs">

    				<ul class="nav navbar-nav hidden-sm" id="logged-in-links">
    	        <li><a style="color: #7e9098 !important; text-transform: capitalize !important; font-family: proximanova-semibold; font-size: 14px; letter-spacing: 0.3px !important;" href="about.php">About</a></li>
    	        <li><a style="color: #7e9098 !important; text-transform: capitalize !important; font-family: proximanova-semibold; font-size: 14px; letter-spacing: 0.3px !important;" href="howitworks.php">How It Works</a></li>
    	        <li><a style="color: #7e9098 !important; text-transform: capitalize !important; font-family: proximanova-semibold; font-size: 14px; letter-spacing: 0.3px !important;" href="contact.php">Contact</a></li>
    	      </ul>

    				<li id="navbar-post-button-wrapper">
              <a href="post.php" id="navbar-post-button">new post<span class="ss-icon" style="padding-left: 7px; position: relative; top: 2px; left: 1px; font-size: 12px;">textfile</span></a>
    				</li>

    				<li class="dropdown">

    					<li>
    						<img src="https://pbs.twimg.com/profile_images/831234401686007809/8UswQ-Ll_400x400.jpg" id="navbar-profile-image" alt="Profile Image">
    					</li>

    					<a class="dropdown-toggle" data-toggle="dropdown" id="navbar-profile-dropdown" href=""><?php echo escape($user->data()->user_first) . ' ' . escape($user->data()->user_last); ?><span class="ss-icon" style="font-size: 11px; position: relative; top: 1px; color: #68707b; left: 4px;">dropdown</span></a>
    					<ul class="dropdown-menu" id="navbar-dropdown" role="menu">
    						<div class="arrow-up"></div>
    						<li>
    							<a href="<?php echo escape($user_profile_url); ?>">
    								<span class="ss-icon">user</span>
    								Profile
    							</a>
    						</li>
    						<li>
    							<a href="update.php">
    								<span class="ss-icon">userfile</span>
    								Edit Profile
    							</a>
    						</li>
    						<li>
    							<a href="/changepassword.php">
    								<span class="ss-icon">lock</span>
    								Change Password
    							</a>
    						</li>
    						<li id="navbar-dropdown-logout-button">
    							<a href="/logout.php">
    								LOGOUT
    							</a>
    						</li>
    					</ul>

    				</li>
    			</ul>
    		</div><!-- /.navbar-collapse -->
    	</div><!-- /.container-fluid -->
    </nav>

    <!-- Main Content -->
    <section class="main">

      <div class="container">
        <!-- Search Bar -->
        <div class="row" id="search-bar-area">
          <div class="col-md-10 col-md-offset-1">
            <input type="text" class="main-search" placeholder="Search For Food.." id="search-2" name="search-2" data-toggle="hideseek" data-list=".default_list_data" data-nodata="No Stores found" autocomplete="off">
            <span class="ss-icon search-icon">search</span>
          </div>
        </div>
        <div style="margin-top: 11px; background-color: #ebeff3; color: #898c90; border-top-right-radius: 2px; border-top-left-radius: 2px; border-top: 4px solid #d6dee4;" class="row" id="filters">
          <div class="radio">
            <label class="radio-inline"><input id="rad1" type="radio" name="optradio">Meat</label>
            <label class="radio-inline"><input id="rad2" type="radio" name="optradio">Vegetables</label>
            <label class="radio-inline"><input id="rad3" type="radio" name="optradio">Fruit</label>
            <label class="radio-inline"><input id="rad1" type="radio" name="optradio">Meat</label>
            <label class="radio-inline"><input id="rad2" type="radio" name="optradio">Vegetables</label>
            <label class="radio-inline"><input id="rad3" type="radio" name="optradio">Fruit</label>
        </div>
      </div>

      </div>
    </section>

    <!-- Display Listings -->
    <section class="listings">
      <div class="container-fluid">

        <!-- Recent Posts. -->
        <div class="row" id="listing-rows">

          <?php /** Check whether the user had a successful post. */
          if (Session::exists('successful_post')) { // Start
          ?>
              <div class="alert alert-success alert-dismissible col-lg-10 col-lg-offset-1" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <?php echo Session::flash('successful_post'); ?>
              </div>
          <?php

          } // End
          ?>

          <!-- Display Grid For Posts. -->
          <div class="col-md-10 col-md-offset-1 grid">

            <div class="grid-sizer"></div>

                <?php
                $postings = DB::getInstance()->query("SELECT * FROM posts ORDER BY post_date DESC");

                if ($postings->count()) {
                    foreach ($postings->results() as $post) {

                    // Get the image for the post.
                    $post_image = DB::getInstance()->get('post_image', array('post_id', '=', $post->post_id));
                        $image = '';

                    // Save into a variable.
                    if ($post_image->count()) {
                        $image = $post_image->first();
                    }

                    // Format the description.
                    $description = substr($post->post_description, 0, 100) . '...';

                    // Convert the date.
                    $post_date = strtotime($post->post_date);
                        $post_date = date('Y-m-d', $post_date);

                    // Get the ID for the posting.
                    $post_listing_url = '/listing.php?post=' . substr($post->post_id, 5);

                        echo "
                      <div class='thumbnail grid-item'>
                        <a href='{$post_listing_url}'>
                          <img src='{$image->post_image_url}' class='img-responsive' alt='Post Image'>
                          <div class='caption'>
                            <p class='title'>
                            {$post->post_title}
                            </p>
                            <p class='description'>
                              {$description}
                              <a href='{$post_listing_url}' style='color: #50ba4a !important; font-family: proximanova-regular; letter-spacing: 0.5px;'>read more</a>
                            </p>
                            <div class='form-divider' style='margin: 5px 0 9px;'></div>
                            <small class='stats-text'>
                                <b>Posted: </b> {$post_date}
                                <img class='hidden-xs' id='user-post-profile-image' src='https://static1.squarespace.com/static/56ba4348b09f95db7f71a726/t/58d7f267ff7c50b172895560/1490547315597/justin.jpg' />
                            </small>
                            <tags style='display: none;'>{$post->post_tag}</tags>
                          </div>
                        </a>
                      </div>
                    ";
                    }
                } else {
                    echo 'There are no posts available.';
                }
                ?>

            </div>
        </div>
      </div>
    </section>
    <script type="text/javascript">

    $(document).ready(function(){
       $('.toggle-menu').jPushMenu({closeOnClickLink: true});
       $('.dropdown-toggle').dropdown();
     });

    (function($) {

    $.fn.jPushMenu = function(customOptions) {
    var o = $.extend({}, $.fn.jPushMenu.defaultOptions, customOptions);

    /* add class to the body.*/
    $('body').addClass(o.bodyClass);
    $(this).addClass('jPushMenuBtn');
    $(this).click(function() {
     var target         = '',
     push_direction     = '';


     if($(this).is('.'+o.showLeftClass)) {
       target         = '.cbp-spmenu-left';
       push_direction = 'toright';
     }
     else if($(this).is('.'+o.showRightClass)) {
       target         = '.cbp-spmenu-right';
       push_direction = 'toleft';
     }
     else if($(this).is('.'+o.showTopClass)) {
       target         = '.cbp-spmenu-top';
     }
     else if($(this).is('.'+o.showBottomClass)) {
       target         = '.cbp-spmenu-bottom';
     }


     $(this).toggleClass(o.activeClass);
     $(target).toggleClass(o.menuOpenClass);

     if($(this).is('.'+o.pushBodyClass)) {
       $('body').toggleClass( 'cbp-spmenu-push-'+push_direction );
     }

     /* disable all other button*/
     $('.jPushMenuBtn').not($(this)).toggleClass('disabled');

     return false;
    });
    var jPushMenu = {
     close: function (o) {
       $('.jPushMenuBtn,body,.cbp-spmenu').removeClass('disabled active cbp-spmenu-open cbp-spmenu-push-toleft cbp-spmenu-push-toright');
     }
    }

    if(o.closeOnClickOutside) {
     $(document).click(function() {
       jPushMenu.close();
     });

     $(document).on('click touchstart', function(){
       jPushMenu.close();
     });

     $('.cbp-spmenu,.toggle-menu').click(function(e){
       e.stopPropagation();
     });

     $('.cbp-spmenu,.toggle-menu').on('click touchstart', function(e){
       e.stopPropagation();
     });
    }

       // On Click Link
       if(o.closeOnClickLink) {
           $('.cbp-spmenu a').on('click',function(){
               jPushMenu.close();
           });
       }
    };

    /* in case you want to customize class name,
    *  do not directly edit here, use function parameter when call jPushMenu.
    */
    $.fn.jPushMenu.defaultOptions = {
    bodyClass       : 'cbp-spmenu-push',
    activeClass     : 'menu-active',
    showLeftClass   : 'menu-left',
    showRightClass  : 'menu-right',
    showTopClass    : 'menu-top',
    showBottomClass : 'menu-bottom',
    menuOpenClass   : 'cbp-spmenu-open',
    pushBodyClass   : 'push-body',
    closeOnClickOutside: true,
    closeOnClickInside: true,
    closeOnClickLink: true
    };
    })(jQuery);

    </script>

  </body>
</html>
