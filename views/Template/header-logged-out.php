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
      <a class="navbar-brand" href="/index.php">
        <img class="img-responsive" id="header-logo" src="/public/assets/images/overcooked-logo-logged-out.svg" alt="Overcooked Logo">
      </a>

		</div>

		<!-- Collapsable navbar and regular nav items. -->
		<div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="bs-example-navbar-collapse-1">

			<!-- Side bar menu items -->
			<ul class="nav navbar-nav visible-xs">

				<li>
					<button class="navbar-toggle toggle-menu menu-right push-body pull-right" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button" style="opacity: 0.67; padding-top: 24px; padding-right: 22px; padding-left: 30px; padding-bottom: 30px; z-index: 1000;">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
					</button>
				</li>

				<li style="margin-top: 10px;">
					<a href="#problem-statement" class="side-bar-link" style="margin-left: -12px;">
						<span class="ss-icon">right</span>
						<span class="side-bar-link-text move-link">START HERE</span>
					</a>
				</li>

				<li>
					<a href="#about-section" class="side-bar-link" style="margin-left: -12px;">
						<span class="ss-icon">cook</span>
						<span class="side-bar-link-text move-link">ABOUT</span>
					</a>
				</li>

				<li>
					<a href="#partners-section" class="side-bar-link" style="margin-left: -12px;">
						<span class="ss-icon">usergroup</span>
						<span class="side-bar-link-text move-link">PARTNERS</span>
					</a>
				</li>

				<li>
					<a href="mailto:hello@overcooked.ca" class="side-bar-link" style="margin-left: -12px;">
						<span class="ss-icon">mail</span>
						<span class="side-bar-link-text move-link">CONTACT US</span>
					</a>
				</li>

				<hr>

				<li>
          <a href="login.php" style="background: #fff; margin-left: 15px; margin-right: 15px; color: #11927d; border: 1px solid #c0e4de; box-shadow: 0 0px 6px rgba(50,50,93,.05), 0 1px 3px rgba(0,0,0,.03);" class="btn btn-default navbar-btn" id="header-get-started">Sign In</a>
        </li>

        <li>
          <a href="register.php" class="btn btn-default navbar-btn" id="pushout-get-started">Get Started</a>
        </li>

			</ul>

			<!-- Large view items -->
      <ul class="nav navbar-nav hidden-xs" id="logged-out-links">
        <li><a class="move-link" href="#problem-statement"><span id="moving-arrow" class="ss-icon">up</span>Start Here</a></li>
        <li><a class="move-link" href="#about-section">About</a></li>
        <li><a class="move-link" href="#partners-section">Partners</a></li>
        <li><a class="move-link hidden-sm" href="mailto:hello@overcooked.ca">Contact Us</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right hidden-xs">
        <li><a href="/login.php" id="header-sign-in">Sign In <span class="ss-icon">navigateright</span></a></li>
				<li>
          <a href="register.php" class="btn btn-default navbar-btn" id="header-get-started">Get Started</a>
        </li>
      </ul>

		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<!-- Script for the pushout menu.-->
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

  var $root = $('html, body');
  $(document).on('click', 'a.move-link', function(event) {
      event.preventDefault();
      $root.animate({
          scrollTop: $($.attr(this, 'href')).offset().top - 300
      }, 1200, 'swing');
  });
</script>
