<nav class="navbar navbar-default" id="header-bar">
  <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <!-- Collapsable Navigation Bar -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse" aria-expanded="false">
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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse">

      <ul class="nav navbar-nav" id="logged-out-links">
        <li><a class="move-link" href="#start-here"><span id="moving-arrow" class="ss-icon">up</span>Start Here</a></li>
        <li><a class="move-link" href="#about">About</a></li>
        <li><a class="move-link" href="#partners">Partners</a></li>
        <li><a class="move-link hidden-sm" href="#support">Contact Us</a></li>
      </ul>

      <script type="text/javascript">
      function loop() {
        $('#moving-arrow').animate({'top': '37'}, {
          duration: 450,
          complete: function() {
              $('#moving-arrow').animate({top: 41}, {
                  duration: 450,
                  complete: loop});
        }});
      }

      loop();
      </script>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="/login.php" id="header-sign-in">Sign In <span class="ss-icon">navigateright</span></a></li>
        <li>
          <a href="register.php" class="btn btn-default navbar-btn" id="header-get-started">Get Started</a>
        </li>
      </ul>

    </div> <!-- /.navbar-collapse -->
  </div> <!-- /.container-fluid -->
</nav>
