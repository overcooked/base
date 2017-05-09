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
        <img class="img-responsive" id="header-logo" src="/public/assets/images/overcooked-logo.svg" alt="Overcooked Logo">
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
					<img src="https://www.flamedomain.com/images/justin.jpg" id="side-bar-profile-image" alt="Profile Image">
					<p id="side-bar-name">Justin Leung</p>
					<a href="/profile.php" id="side-bar-profile">view profile</a>
				</li>

				<li>
					<a href="post.php" class="side-bar-link">
						<span class="ss-icon">compose</span>
						<span class="side-bar-link-text">NEW POST</span>
					</a>
				</li>

				<li>
					<a href="post.php" class="side-bar-link">
						<span class="ss-icon">adduser</span>
						<span class="side-bar-link-text">UPDATE PROFILE</span>
					</a>
				</li>

				<li>
					<a href="post.php" class="side-bar-link">
						<span class="ss-icon">unlock</span>
						<span class="side-bar-link-text">CHANGE PASSWORD</span>
					</a>
				</li>

				<li>
					<a href="post.php" class="side-bar-link">
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

				<li>
					<a href="post.php">POST</a>
				</li>

				<li class="dropdown">

					<a class="dropdown-toggle" data-toggle="dropdown" href="">Profile <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="#">Action</a>
						</li>
						<li>
							<a href="#">Another action</a>
						</li>
						<li>
							<a href="#">Something else here</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">Separated link</a>
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
