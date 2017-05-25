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
        <img class="img-responsive" id="header-logo" src="/public/assets/images/overcooked-logo.svg" style="border:none;" alt="Overcooked Logo">
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

				<?php
				$profile_image = DB::getInstance()->get('users_profile', array('user_id', '=', $user->data()->user_id));
				$profile_image = $profile_image->first();

				if($profile_image->profile_image_url) {
					echo '
					<li>
						<img src=" ' . $profile_image->profile_image_url . '" id="side-bar-profile-image" alt="Profile Image">
						<p id="side-bar-name">' . escape($user->data()->user_first) . ' ' . escape($user->data()->user_last) . '</p>
						<a href="' . escape($user_profile_url) . '" id="side-bar-profile">view profile</a>
					</li>
					';
				} else {
					echo '
					<li>
						<img src="https://static1.squarespace.com/static/56ba4348b09f95db7f71a726/t/58d7f267ff7c50b172895560/1490547315597/justin.jpg" id="side-bar-profile-image" alt="Profile Image">
						<p id="side-bar-name">' . escape($user->data()->user_first) . ' ' . escape($user->data()->user_last) . '</p>
						<a href="' . escape($user_profile_url) . '" id="side-bar-profile">view profile</a>
					</li>
					';
				}
				?>

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

				<ul class="nav navbar-nav hidden-sm" id="logged-in-links" style="position: relative; bottom: -1px; right: 5px;">
					<li><a style="color: #7e9098 !important; text-transform: capitalize !important; font-family: proximanova-semibold; font-size: 14px; letter-spacing: 0.3px !important;" href="<?php echo escape($user_profile_url); ?>">Profile</a></li>
					<li><a style="color: #7e9098 !important; text-transform: capitalize !important; font-family: proximanova-semibold; font-size: 14px; letter-spacing: 0.3px !important;" href="/messages.php">Messages</a></li>
					<li><a style="color: #7e9098 !important; text-transform: capitalize !important; font-family: proximanova-semibold; font-size: 14px; letter-spacing: 0.3px !important;" href="mailto:hello@overcooked.ca">Support</a></li>
				</ul>

				<li id="navbar-post-button-wrapper" style="margin-top: 13px;">
					<a href="post.php" id="navbar-post-button">new listing<span class="ss-icon" style="padding-left: 7px; position: relative; top: 2px; left: 1px; font-size: 12px;">textfile</span></a>
				</li>

				<li class="dropdown">

					<li>
					<?php
					if($profile_image->profile_image_url) {
						echo "<img style='position: relative; top: -1px;' src='{$profile_image->profile_image_url}' id='navbar-profile-image' alt='Profile Image'>";
					} else {
						echo "<img style='position: relative; top: -1px;' src='https://pbs.twimg.com/profile_images/831234401686007809/8UswQ-Ll_400x400.jpg' id='navbar-profile-image' alt='Profile Image'>";
					}
					?>
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
